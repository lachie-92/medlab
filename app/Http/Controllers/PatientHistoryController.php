<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Medlab\Repositories\AccountRepositoryInterface;
use App\Patient_History;
use App\Patient_History_Attribute;
use App\Http\Requests;


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
     * Display the Dashboard for the given account type
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function index()
    {
        return 'index';
    }

    /**
     * Display the form for changing User information
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $page = 1;
        $user = $this->user;
        $intake = [];
        $orders = $this->repository->getLatestOrdersForUser($user);

        return view('pages.account.patient-history.patient.edit.index', compact('page', 'user', 'orders', 'intake'));
    }

    public function update($history)
    {
        $history = Patient_History::with('attributes')->findOrFail($history);
        $user = $this->user;
        $orders = $this->repository->getLatestOrdersForUser($user);

        foreach ($history->attributes as $attribute) {
            $intake[$attribute->key] = $attribute->value;
        }

        return view('pages.account.patient-history.patient.edit.index', compact('page', 'user', 'orders', 'intake', 'history'));
    }

    public function store(Request $request)
    {
        $history = new Patient_History();
        $history->patient()->associate($this->user->patient);
        $history->save();

        $history_data = $request->all();
        foreach ($history_data as $key => $val) {
            Patient_History_Attribute::updateOrCreate([
                'history_id' => $history->id,
                'key'        => $key,
                'value'      => $val,
            ]);
        }

        return redirect()->route('account.patient-history.update', [
            'history' => $history->id,
            'page'    => 2,
        ]);


        // // Save input data to session
        // $intake = array_merge($request->session()->get('patient-history-intake', []), $request->all());
        // $request->session()->put('patient-history-intake', $intake);

        // return view('pages.account.patient-history.patient.edit.index', compact('page', 'user', 'orders', 'intake'));
    }
}
