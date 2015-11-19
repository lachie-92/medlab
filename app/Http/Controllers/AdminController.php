<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminCreateCompanyRequest;
use App\Http\Requests\AdminCreatePatientAccountRequest;
use App\Http\Requests\AdminCreatePractitionerAccountRequest;
use App\Http\Requests\AdminCreatePractitionerRegistrationRequest;
use App\Http\Requests\OrderStatusUpdateRequest;
use App\Http\Requests\OrderViewDetailsRequest;
use App\Medlab\Mailer\MedlabMailer;
use App\Medlab\Repositories\AccountRepositoryInterface;
use App\Medlab\Repositories\AdminRepositoryInterface;
use App\Patient_Registration;
use App\Practitioner_Registration;

class AdminController extends Controller
{
    /**
     * Repository for the Controller
     *
     * @var AdminRepositoryInterface
     */
    protected $repository;

    /**
     * Constructor for the AdminController
     *
     * @param AdminRepositoryInterface $repository
     */
    public function __construct(AdminRepositoryInterface $repository)
    {
        $this->middleware('authAdmin');

        $this->repository = $repository;

        parent::__construct();
    }

    /**
     * Display the Main page for viewing all the Patient Registrations
     *
     * @return \Illuminate\Http\Response
     */
    public function getShowPatientRegistrations()
    {
        $patientRegistrationList = $this->repository->getUnapprovedPatientRegistrationList();
        $patientRegistrationApprovedList = $this->repository->getApprovedPatientRegistrationList();
        $patientRegistrationDeletedList = $this->repository->getDeletedPatientRegistrationList();

        return view('pages.account.dashboard.admin.patientregistration.main.index', compact(
            'patientRegistrationList',
            'patientRegistrationApprovedList',
            'patientRegistrationDeletedList'
        ));
    }

    /**
     * Display the a single Patient Registration
     *
     * @param Patient_Registration $registration
     * @return \Illuminate\Http\Response
     */
    public function getPatientRegistration(Patient_Registration $registration)
    {
        // Get the Practitioner belong to the patient if there is any
        $practitioner = $this->repository->getPractitionerFromPatientRegistration($registration);

        // Choose the appropriate view for the registration based on its status
        // Forward Deleted Registration
        if ($registration->deleted_at != null) {
            return view('pages.account.dashboard.admin.patientregistration.deleted.index', compact(
                'registration', 'practitioner'
            ));
        }
        // Forward Unapproved Registration
        if ($registration->approval == null) {

            return view('pages.account.dashboard.admin.patientregistration.new.index', compact(
                'registration', 'practitioner'
            ));
        }
        // Forward Approved Registration
        else {
            return view('pages.account.dashboard.admin.patientregistration.approved.index', compact(
                'registration', 'practitioner'
            ));
        }
    }

    /**
     * Delete the given Patient Registration
     *
     * @param Patient_Registration $registration
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postDeletePatientRegistration(Patient_Registration $registration)
    {
        $result = $this->repository->deleteRegistration($registration);

        return redirect('/account/patient-registration')->with(['message' => $result['message']]);
    }

    /**
     * Restore the given Patient Registration
     *
     * @param Patient_Registration $registration
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postRestoreDeletedPatientRegistration(Patient_Registration $registration)
    {
        $result = $this->repository->restoreRegistration($registration);

        return redirect('/account/patient-registration')->with(['message' => $result['message']]);
    }

    /**
     * Create a Patient account using the given Patient Registration
     *
     * @param AdminCreatePatientAccountRequest $request
     * @param Patient_Registration $registration
     * @param MedlabMailer $mail
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postCreatePatientAccount(AdminCreatePatientAccountRequest $request, Patient_Registration $registration, MedlabMailer $mail)
    {
        $this->repository->createPatientAccount($request, $registration);
        $mail->sendRegistrationApprovalEmail($registration);

        return redirect('/account/patient-registration')->with(['message' => 'Account has been created']);
    }

    /**
     * Display the form for creating a Practitioner base on a Patient Registration
     *
     * @param Patient_Registration $registration
     * @return \Illuminate\Http\Response
     */
    public function getNewPractitionerRegistration(Patient_Registration $registration)
    {
        return view('pages.account.dashboard.admin.practitionerregistration.frompatient.index', compact(
            'registration'
        ));
    }

    /**
     * Create a Practitioner account base on Patient Registration
     *
     * @param AdminCreatePractitionerRegistrationRequest $request
     * @param MedlabMailer $mail
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postNewPractitionerRegistration(AdminCreatePractitionerRegistrationRequest $request, MedlabMailer $mail)
    {
        $registration = $this->repository->createPractitionerRegistration($request);
        $this->repository->createPractitionerAccount(null, $registration);
        $mail->sendRegistrationApprovalEmail($registration);

        return redirect('/account/practitioner-registration')->with(['message' => 'Account has been created']);
    }

    /**
     * Display the Main page for viewing all the Practitioner Registrations
     *
     * @return \Illuminate\Http\Response
     */
    public function getShowPractitionerRegistrations()
    {
        $practitionerRegistrationList = $this->repository->getUnapprovedPractitionerRegistrationList();
        $practitionerRegistrationApprovedList = $this->repository->getApprovedPractitionerRegistrationList();
        $practitionerRegistrationDeletedList = $this->repository->getDeletedPractitionerRegistrationList();

        return view('pages.account.dashboard.admin.practitionerregistration.main.index', compact(
            'practitionerRegistrationList',
            'practitionerRegistrationApprovedList',
            'practitionerRegistrationDeletedList'
        ));
    }

    /**
     * Display a single Practitioner Registration
     *
     * @param Practitioner_Registration $registration
     * @return \Illuminate\Http\Response
     */
    public function getPractitionerRegistration(Practitioner_Registration $registration)
    {
        // Get the Company belong to the practitioner if there is any
        $company = $this->repository->getCompanyFromPractitionerRegistration($registration);

        // Choose the appropriate view for the registration based on its status
        // Forward Deleted Registration
        if ($registration->deleted_at != null) {
            return view('pages.account.dashboard.admin.practitionerregistration.deleted.index', compact(
                'registration', 'company'
            ));
        }

        // Forward Unapproved Registration
        if ($registration->approval == null) {

            return view('pages.account.dashboard.admin.practitionerregistration.new.index', compact(
                'registration', 'company'
            ));
        }
        // Forward Approved Registration
        else {
            return view('pages.account.dashboard.admin.practitionerregistration.approved.index', compact(
                'registration', 'company'
            ));
        }
    }

    /**
     * Create a company for the Practitioner Registration
     *
     * @param AdminCreateCompanyRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function postCreateCompany(AdminCreateCompanyRequest $request)
    {
        $company = $this->repository->createCompany($request);

        return response()->json(['message' => 'Company has been created']);
    }

    /**
     * Create a Practitioner Account based on the given Practitioner Registration
     *
     * @param AdminCreatePractitionerAccountRequest $request
     * @param Practitioner_Registration $registration
     * @param MedlabMailer $mail
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postCreatePractitionerAccount(AdminCreatePractitionerAccountRequest $request, Practitioner_Registration $registration, MedlabMailer $mail)
    {
        $this->repository->createPractitionerAccount($request, $registration);
        $mail->sendRegistrationApprovalEmail($registration);

        return redirect('/account/practitioner-registration')->with(['message' => 'Account has been created']);
    }

    /**
     * Delete the given Practitioner Registration
     *
     * @param Practitioner_Registration $registration
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postDeletePractitionerRegistration(Practitioner_Registration $registration)
    {
        $result = $this->repository->deleteRegistration($registration);

        return redirect('/account/practitioner-registration')->with(['message' => $result['message']]);
    }

    /**
     * Restore the given Practitioner Registration
     *
     * @param Practitioner_Registration $registration
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postRestoreDeletedPractitionerRegistration(Practitioner_Registration $registration)
    {
        $result = $this->repository->restoreRegistration($registration);

        return redirect('/account/practitioner-registration')->with(['message' => $result['message']]);
    }

    /**
     * Display the Main page for viewing all the Orders
     *
     * @param $display
     * @return \Illuminate\Http\Response
     */
    public function getAdminShowOrders($display)
    {
        $displayOptions = [
            'received',
            'canceled',
            'dispatched',
            'on-hold'
        ];

        if (!in_array($display, $displayOptions)) {
            $display = 'received';
        }

        $itemsPerPage = 5;
        $orderCollection = $this->repository->getOrderCollection($itemsPerPage);

        return view('pages.account.dashboard.admin.order.main.index', compact(
            'orderCollection',
            'display'
        ));
    }

    /**
     * Display a single Order
     *
     * @param OrderViewDetailsRequest $request
     * @param AccountRepositoryInterface $accountRepository
     * @return \Illuminate\Http\Response
     */
    public function postAdminOrderDetails(OrderViewDetailsRequest $request, AccountRepositoryInterface $accountRepository)
    {
        $order = $accountRepository->getOrderDetails($request);

        return view('pages.account.dashboard.admin.order.details.index', compact(
            'order'
        ));
    }

    /**
     * Update the order status of the given order
     *
     * @param OrderStatusUpdateRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postAdminOrderUpdate(OrderStatusUpdateRequest $request)
    {
        $result = $this->repository->updateOrderStatus($request);

        return redirect($result['redirect'])->with(['message' => $result['message']]);
    }
}
