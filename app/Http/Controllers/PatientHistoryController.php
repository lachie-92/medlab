<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Medlab\Repositories\AccountRepositoryInterface;
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
    public function create($page = 1)
    {
        $user = $this->user;
        $orders = $this->repository->getLatestOrdersForUser($user);
        return view('pages.account.patient-history.patient.edit.index', compact('page', 'user', 'orders'));
    }
}
