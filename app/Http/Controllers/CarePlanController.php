<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Medlab\Repositories\AccountRepositoryInterface;
use App\Patient;
use App\Patient_CarePlan;
use App\Patient_CarePlan_Attribute;
use App\Practitioner;
use App\Careplan_Consultant;
use App\Http\Requests;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class CarePlanController extends Controller
{
    /**
     * Repository for the Controller
     *
     * @var AccountRepositoryInterface
     */
    protected $repository;

    /**
     * Constructor fore the AccountController
     *
     * @param AccountRepositoryInterface $repository
     */
    public function __construct(AccountRepositoryInterface $repository)
    {
        $this->middleware('auth');

        $this->repository = $repository;

        parent::__construct();
    }

    /**
     * Create a new Patient CarePlan instance and relay it to the update() method
     *
     * @param  Request $request HTTP request object
     */
    public function store(Request $request)
    {
        $careplan = new Patient_CarePlan();
        $careplan->patient()->associate($this->user->patient);
        $careplan->save();

        return $this->update($careplan->id, $request);
    }

    /**
     * Save Patient CarePlan settings
     *
     * @param  int  $careplan Patient CarePlan id
     * @param  Request $request HTTP Request object
     */
    public function updateConfiguration($careplan, Request $request)
    {

        $this->validate($request, [
            'email' => 'required|email|max:255|unique:users'
        ]);

        // Email address looks good, let's hook it up
        $careplan = Patient_CarePlan::with('attributes')->findOrFail($careplan);
        $consultant = new Careplan_Consultant();
        $consultant->user_email = $request->get('email');
        $consultant->nonce = hash('sha512', str_random());
        $careplan->consultants()->save($consultant);

        return redirect()->back()->with([
                    'message' => 'The practitioner has been invited'
                ]);;
    }

    /**
     * Connect Practitioner to a Care Plan via email invitation
     *
     * @param  int  $careplan Patient CarePlan id
     * @param  string  $nonce    Invitation nonce
     * @param  Request $request  HTTP Request object
     */
    public function join($careplan, $nonce, Request $request)
    {
        try {
            $invitation = Careplan_Consultant::where('nonce', $nonce)->where('careplan_id', $careplan)->firstOrFail();
        } catch (ModelNotFoundException $e) {
            return redirect()->route('account.careplan.index')->with([
                'message' => 'Invalid Care Plan'
            ]);
        }

        // If we've gotten this far, the nonce is good; Hook it up.
        $invitation->user_id = $this->user->id;
        $invitation->nonce = null;
        $invitation->save();

        return redirect()->route('account.careplan.index')->with([
                'message' => 'The Care Plan has been associated with your account'
            ]);
    }

    /**
     * Set the locked timestamp on a Patient CarePlan record
     *
     * @param  int  $careplan Patient CarePlan id
     */
    public function lock($careplan)
    {
        $careplan = Patient_CarePlan::findOrFail($careplan);
        if ($careplan->patient->practitioner->user->id != $this->user->id) throw new \Exception("Cannot lock/unlock this careplan");

        $careplan->locked_at = Carbon::now();
        $careplan->save();

        return redirect()->back()->with([
                    'message' => 'This careplan has been locked'
                ]);;
    }

    /**
     * Clear the locked timestamp on a Patient CarePlan record
     *
     * @param  int  $careplan Patient CarePlan id
     */
    public function unlock($careplan)
    {
        $careplan = Patient_CarePlan::findOrFail($careplan);
        if ($careplan->patient->practitioner->user->id != $this->user->id) throw new \Exception("Cannot lock/unlock this careplan");

        $careplan->locked_at = null;
        $careplan->save();

        return redirect()->back()->with([
                    'message' => 'This careplan has been unlocked'
                ]);
    }

    /**
     * Update Patient CarePlan instance and optionally redirect to the next page
     *
     * @param  int  $careplan Patient CarePlan id
     * @param  Request $request HTTP Request object
     */
    public function update($careplan, Request $request) {
        $careplan = Patient_CarePlan::with('attributes')->findOrFail($careplan);
        $careplan_data = $request->all();

        if (! ($this->user->patient && $careplan->patient_id == $this->user->patient->id)) throw new \Exception("Cannot update this careplan");

        foreach ($careplan_data as $key => $val) {
            if (! starts_with($key, '_')) {
                try {
                    $attribute = Patient_CarePlan_Attribute::where('careplan_id', $careplan->id)->where('key', $key)->firstOrFail();
                } catch (ModelNotFoundException $e) {
                    $attribute = new Patient_CarePlan_Attribute();
                    $attribute->careplan_id = $careplan->id;
                    $attribute->key = $key;
                }
                $attribute->value = $val;
                $attribute->save();
            }
        }

        // If page variable exists, redirect
        if ($request->has('page')) {
            if ($request->get('page')==4) {
                return redirect()->route('account.careplan.index')->with([
                    'message' => 'Your patient careplan has been saved'
                ]);
            } else {
                return redirect()->route('account.careplan.edit', [
                    'careplan' => $careplan->id,
                    'page'    => $request->get('page') + 1,
                ]);
            }
        } else {
            return true;
        }
    }

    public function updateConsulting($careplan, Request $request) {
        try {
            $consulting_data = Careplan_Consultant::where('careplan_id', $careplan)->where('user_id', $this->user->id)->firstOrFail();
        } catch (ModelNotFoundException $e) {
            return redirect()->route('account.careplan.index')->with([
                'message' => 'Invalid Care Plan'
            ]);
        }

        if ($request->has('opportunity')) $consulting_data->opportunity = $request->get('opportunity');
        if ($request->has('goal'))        $consulting_data->goal        = $request->get('goal');
        if ($request->has('action'))      $consulting_data->action      = $request->get('action');
        if ($request->has('target'))      $consulting_data->target      = $request->get('target');
        if ($request->has('progress'))    $consulting_data->progress    = $request->get('progress');
        if ($request->has('source'))      $consulting_data->source      = $request->get('source');

        $consulting_data->save();

        return redirect()->route('account.careplan.index')->with([
                'message' => 'The Care Plan consultation has been saved'
            ]);

    }

    /**
     * Render listing of patient careplan intakes
     *
     * @param  Request $request HTTP Request object
     */
    public function pageIndex(Request $request) {
        $user = $this->user->load('patient.careplans', 'patients.careplans', 'consulting');
        $orders = $this->repository->getLatestOrdersForUser($user);
        $data = compact('user', 'orders');
        if ($request->has('patient')) {
            $data['patient'] = Patient::findOrFail($request->get('patient'));
            $data['careplans'] = Patient_CarePlan::where('patient_id', $request->get('patient'))->orderBy('created_at', 'DESC')->orderBy('id')->paginate(5);
        }

        return view('pages.account.dashboard.careplan.overview.index', $data);
    }

    /**
     * Render details of a Careplan Intake
     *
     * @param  int  $careplan Patient CarePlan id
     */
    public function pageView($careplan) {
        $careplan = Patient_CarePlan::with('attributes')->findOrFail($careplan);
        if (! ($careplan->patient->user->id == $this->user->id ||
              ($careplan->patient->practitioner->user->id == $this->user->id)))
            throw new \Exception('Cannot view this careplan');

        $user = $this->user->load('patient.histories');
        $orders = $this->repository->getLatestOrdersForUser($user);
        $intake = $careplan->attributes->map(function($item) {
            return [$item->key => $item->value];
        })->collapse()->toArray();
        $readOnly = true;

        return view('pages.account.careplan.patient.view.index', compact('user', 'orders', 'careplan', 'intake', 'readOnly'));
    }

    /**
     * Render form for a new Patient CarePlan intake
     */
    public function pageCreate() {
        $user = $this->user;
        $orders = $this->repository->getLatestOrdersForUser($user);
        $page = 1;
        $intake = [];

        return view('pages.account.careplan.patient.edit.index', compact('page', 'user', 'orders', 'intake'));
    }

    /**
     * Set up and render template for editing a section of a Patient CarePlan
     *
     * @param  integer $careplan Patient CarePlan primary key
     * @param  integer $page    CarePlan section to display
     */
    public function pageEdit($careplan, $page) {
        $careplan = Patient_CarePlan::with('attributes')->findOrFail($careplan);
        if (! ($this->user->patient && $careplan->patient_id == $this->user->patient->id)) throw new \Exception("Cannot update this careplan");

        $user = $this->user;
        $orders = $this->repository->getLatestOrdersForUser($user);
        $intake = $careplan->attributes->map(function($item) {
            return [$item->key => $item->value];
        })->collapse()->toArray();

        return view('pages.account.careplan.patient.edit.index', compact('page', 'user', 'orders', 'intake', 'careplan'));
    }

    /**
     * Set up and render template for attaching consultation to a Patient CarePlan
     *
     * @param  integer $careplan Patient CarePlan primary key
     */
    public function pageConsulting($careplan) {
        $careplan = Patient_CarePlan::with('consultants')->findOrFail($careplan);
        if (! ($careplan->consultants->contains('user_id', $this->user->id))) throw new \Exception("Cannot update this careplan");

        $consultant_data = $careplan->consultants->where('user_id', $this->user->id)->first();

        $user = $this->user;
        $orders = $this->repository->getLatestOrdersForUser($user);
        $intake = $careplan->attributes->map(function($item) {
            return [$item->key => $item->value];
        })->collapse()->toArray();
        $readOnly = true;

        return view('pages.account.careplan.consultant.edit.index', compact('user', 'orders', 'careplan', 'intake', 'readOnly', 'consultant_data'));
    }

    /**
     * Set up and render template for configuring Patient CarePlan settings
     *
     * @param  integer $careplan Patient CarePlan primary key
     */
    public function pageConfigure($careplan) {
        $careplan = Patient_CarePlan::with('consultants.practitioner')->findOrFail($careplan);
        if (! ($careplan->patient->user->id == $this->user->id ||
              ($careplan->patient->practitioner->user->id == $this->user->id)))
            throw new \Exception('Cannot configure this careplan');

        $user = $this->user;
        $orders = $this->repository->getLatestOrdersForUser($user);
        $consultants = $careplan->consultants;

        return view('pages.account.careplan.practitioner.configure.index', compact('user', 'orders', 'careplan', 'consultants', 'pending'));
    }
}
