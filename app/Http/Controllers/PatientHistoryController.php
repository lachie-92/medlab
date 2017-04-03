<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Medlab\Repositories\AccountRepositoryInterface;
use App\Patient;
use App\Patient_History;
use App\Patient_History_Attribute;
use App\Http\Requests;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class PatientHistoryController extends Controller
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
     * Create a new Patient History instance and relay it to the update() method
     *
     * @param  Request $request HTTP request object
     */
    public function store(Request $request)
    {
        $history = new Patient_History();
        $history->patient()->associate($this->user->patient);
        $history->save();

        return $this->update($history->id, $request);
    }

    /**
     * Set the locked timestamp on a Patient History record
     *
     * @param  int  $history Patient History id
     */
    public function lock($history)
    {
        $history = Patient_History::findOrFail($history);
        $history->locked_at = time();
        $history->save();

        return redirect()->back()->with([
                    'message' => 'This history has been locked'
                ]);;
    }

    /**
     * Clear the locked timestamp on a Patient History record
     *
     * @param  int  $history Patient History id
     */
    public function unlock($history)
    {
        $history = Patient_History::findOrFail($history);
        $history->locked_at = null;
        $history->save();

        return redirect()->back()->with([
                    'message' => 'This history has been unlocked'
                ]);
    }

    /**
     * Update Patient History instance and optionally redirect to the next page
     *
     * @param  int  $history Patient History id
     * @param  Request $request HTTP Request object
     */
    public function update($history, Request $request) {
        $history = Patient_History::with('attributes')->findOrFail($history);
        $history_data = $request->all();

        foreach ($history_data as $key => $val) {
            if (! starts_with($key, '_')) {
                try {
                    $attribute = Patient_History_Attribute::where('history_id', $history->id)->where('key', $key)->firstOrFail();
                } catch (ModelNotFoundException $e) {
                    $attribute = new Patient_History_Attribute();
                    $attribute->history_id = $history->id;
                    $attribute->key = $key;
                }
                $attribute->value = $val;
                $attribute->save();
            }
        }

        // If page variable exists, redirect
        if ($request->has('page')) {
            if ($request->get('page')==6) {
                return redirect()->route('account.patient-history.index')->with([
                    'message' => 'Your patient history has been saved'
                ]);
            } else {
                return redirect()->route('account.patient-history.edit', [
                    'history' => $history->id,
                    'page'    => $request->get('page') + 1,
                ]);
            }
        } else {
            return true;
        }
    }

    /**
     * Render listing of patient history intakes
     *
     * @return [type] [description]
     */
    public function pageIndex(Request $request) {
        $user = $this->user->load('patient.histories')->load('patients.histories');
        $orders = $this->repository->getLatestOrdersForUser($user);
        $data = compact('user', 'orders');
        if ($request->has('patient')) {
            $data['patient'] = Patient::findOrFail($request->get('patient'));
            $data['histories'] = Patient_History::where('patient_id', $request->get('patient'))->orderBy('created_at', 'DESC')->orderBy('id')->paginate(5);
        }

        return view('pages.account.dashboard.patient-history.overview.index', $data);
    }

    /**
     * Render listing of patient history intakes
     *
     * @return [type] [description]
     */
    public function pageView($history) {
        $user = $this->user->load('patient.histories');
        $orders = $this->repository->getLatestOrdersForUser($user);
        $history = Patient_History::with('attributes')->findOrFail($history);
        $intake = $history->attributes->map(function($item) {
            return [$item->key => $item->value];
        })->collapse()->toArray();
        $readOnly = true;

        return view('pages.account.patient-history.patient.view.index', compact('user', 'orders', 'history', 'intake', 'readOnly'));
    }

    /**
     * Render form for a new Patient History intake
     */
    public function pageCreate() {
        $user = $this->user;
        $orders = $this->repository->getLatestOrdersForUser($user);
        $page = 1;
        $intake = [];

        return view('pages.account.patient-history.patient.edit.index', compact('page', 'user', 'orders', 'intake'));
    }

    /**
     * Set up and render template for editing a section of a Patient History
     *
     * @param  integer $history Patient History primary key
     * @param  integer $page    History section to display
     */
    public function pageEdit($history, $page) {
        $user = $this->user;
        $orders = $this->repository->getLatestOrdersForUser($user);
        $history = Patient_History::with('attributes')->findOrFail($history);
        $intake = $history->attributes->map(function($item) {
            return [$item->key => $item->value];
        })->collapse()->toArray();

        return view('pages.account.patient-history.patient.edit.index', compact('page', 'user', 'orders', 'intake', 'history'));
    }
}
