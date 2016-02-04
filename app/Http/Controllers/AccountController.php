<?php

namespace App\Http\Controllers;


use App\Http\Requests\CustomerAddressUpdateRequest;
use App\Http\Requests\OrderViewDetailsRequest;
use App\Medlab\Repositories\AccountRepositoryInterface;
use Illuminate\Http\Request;
use App\Http\Requests;


class AccountController extends Controller
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
    public function dashboard()
    {
        $user = $this->user;
        $orders = $this->repository->getLatestOrdersForUser($user);

        switch ($user->group) {

            case 'Patient':

                return view('pages.account.dashboard.patient.main.index', compact('user', 'orders'));
                break;

            case 'Practitioner':

                return view('pages.account.dashboard.practitioner.main.index', compact('user', 'orders'));
                break;
        }
    }

    /**
     * Display the form for changing User information
     *
     * @return \Illuminate\Http\Response
     */
    public function getEdit()
    {
        $user = $this->user;

        switch ($user->group) {

            case 'Patient':

                return view('pages.account.dashboard.patient.edit.index', compact(
                    'user'
                ));
                break;

            case 'Practitioner':

                return view('pages.account.dashboard.practitioner.edit.index', compact(
                    'user'
                ));
                break;
        }
    }

    /**
     * Update the email address for the current user
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postEmail(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|max:255|unique:users'
        ]);

        $user = $this->user;
        $this->repository->updateUserEmail($request, $user);

        return redirect('/account/edit')->with(['message' => 'Email has been updated']);
    }

    /**
     * Update the news letter subscription for the current user
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postNewsletter(Request $request)
    {
        $this->validate($request, [
            'newsletter' => 'required|boolean'
        ]);

        $user = $this->user;
        $this->repository->updateUserNewsLetter($request, $user);

        return redirect('/account/edit')->with(['message' => 'Newsletter has been updated']);
    }

    /**
     * Update the address for the current user
     *
     * @param CustomerAddressUpdateRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postAddress(CustomerAddressUpdateRequest $request)
    {
        $user = $this->user;
        $this->repository->updateUserAddress($request, $user);

        return redirect('/account/edit')->with(['message' => 'Address has been updated']);
    }

    /**
     * Display the page for viewing all the orders belong to the current user
     *
     * @return \Illuminate\Http\Response
     */
    public function getOrdersOverview()
    {
        $orders = $this->repository->getOrderListForCurrentUser();

        return view('pages.account.dashboard.order.overview.index', compact('orders'));
    }

    /**
     * Display a single Order for the current user
     *
     * @param OrderViewDetailsRequest $request
     * @return \Illuminate\Http\Response
     */
    public function postOrderDetails(OrderViewDetailsRequest $request)
    {
        $order = $this->repository->getOrderDetails($request);

        return view('pages.account.dashboard.order.details.index', compact('order'));
    }
}
