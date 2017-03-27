<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Medlab\Repositories\AccountRepositoryInterface;
use App\Patient_CarePlan;
use App\Patient_CarePlan_Attribute;
use App\Http\Requests;
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
     * Set the locked timestamp on a Patient CarePlan record
     *
     * @param  int  $careplan Patient CarePlan id
     */
    public function lock($careplan)
    {
        $careplan = Patient_CarePlan::findOrFail($careplan);
        $careplan->locked_at = time();
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

    /**
     * Render listing of patient careplan intakes
     *
     * @return [type] [description]
     */
    public function pageIndex() {
        $user = $this->user->load('patient.careplans')->load('patients.careplans');
        $orders = $this->repository->getLatestOrdersForUser($user);

        return view('pages.account.dashboard.careplan.overview.index', compact('user', 'orders'));
    }

    /**
     * Render listing of patient careplan intakes
     *
     * @return [type] [description]
     */
    public function pageView($careplan) {
        $user = $this->user->load('patient.histories');
        $orders = $this->repository->getLatestOrdersForUser($user);
        $careplan = Patient_CarePlan::with('attributes')->findOrFail($careplan);
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
        $user = $this->user;
        $orders = $this->repository->getLatestOrdersForUser($user);
        $careplan = Patient_CarePlan::with('attributes')->findOrFail($careplan);
        $intake = $careplan->attributes->map(function($item) {
            return [$item->key => $item->value];
        })->collapse()->toArray();

        return view('pages.account.careplan.patient.edit.index', compact('page', 'user', 'orders', 'intake', 'careplan'));
    }
}