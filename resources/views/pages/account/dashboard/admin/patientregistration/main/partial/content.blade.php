<!-----------------------------------------------------------------------------------
--
-- Patient Registration
--
------------------------------------------------------------------------------------->

<div class="container medlab_panel_container">
    <div class="row">
        <!--
        -- Account Navigation
        -->
        <div class="col-md-3 col-sm-3 col-xm-12">
            <div class="panel panel-primary medlab_panel">
                <div class="panel-heading medlab_panel_title">
                    Administrator
                </div>

                <div class="list-group">
                    <a href="/account/patient-registration" class="list-group-item">
                        <strong>
                            @if (count($patientRegistrationList))
                                Patient Registration ({{ count($patientRegistrationList) }})
                            @else
                                Patient Registration
                            @endif
                        </strong>
                    </a>
                    <a href="/account/practitioner-registration" class="list-group-item">
                        @if (count($practitionerRegistrationList))
                            Practitioner Registration ({{ count($practitionerRegistrationList) }})
                        @else
                            Practitioner Registration
                        @endif
                    </a>
                    <a href="/account/logout" class="list-group-item">Logout</a>
                </div>

            </div>
        </div>
        <!--
        -- Main Content Column
        -->
        <div class="col-md-9 col-sm-9 col-xm-12">
            @if (session('message'))
                <div class="container-fluid">
                    <div id="message_fade" class="alert alert-success" style="text-align: center">
                        {{ session('message') }}
                    </div>
                </div>
            @endif
            <!--
            -- Patient Registration
            -->
            <div class="panel panel-primary medlab_panel">
                <div class="panel-heading medlab_panel_title">
                    New Patient Registration
                </div>
                <div class="panel-body">
                    @if (count($patientRegistrationList->where('approval', null)))
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Patient Name</th>
                                <th>Clinic</th>
                                <th>Practitioner Name</th>
                                <th>Received</th>
                                <th>Details</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($patientRegistrationList as $patient)
                                <tr>
                                    <td>{{ $patient->first_name }} {{ $patient->last_name }}</td>
                                    <td>{{ $patient->practitioner_clinic }}</td>
                                    <td>{{ $patient->practitioner_name }}</td>
                                    <td>{{ $patient->created_at->diffForHumans() }}</td>
                                    <td><a class="btn btn-default" href="/account/patient-registration/{{ $patient->id }}">View</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <div class="alert alert-info" style="text-align: center; margin-bottom: 0px">
                            There are no new Registrations available
                        </div>
                    @endif
                </div>
            </div>
            <!--
             -- Approved Patient Registration
             -->
            <div class="panel panel-primary medlab_panel">
                <div class="panel-heading medlab_panel_title">
                    Approved Patient Registration
                </div>
                <div class="panel-body">
                    @if (count($patientRegistrationApprovedList))
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Patient Name</th>
                                <th>Clinic</th>
                                <th>Practitioner Name</th>
                                <th>Approved</th>
                                <th>Details</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($patientRegistrationApprovedList as $patient)
                                <tr>
                                    <td>{{ $patient->first_name }} {{ $patient->last_name }}</td>
                                    <td>{{ $patient->practitioner_clinic }}</td>
                                    <td>{{ $patient->practitioner_name }}</td>
                                    <td>{{ $patient->approval->diffForHumans() }}</td>
                                    <td><a class="btn btn-default" href="/account/patient-registration/{{ $patient->id }}">View</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <div class="alert alert-info" style="text-align: center; margin-bottom: 0px">
                            There are no Registrations approved in the history
                        </div>
                    @endif
                </div>
            </div>
            <!--
             -- Deleted Patient Registration
             -->
            <div class="panel panel-primary medlab_panel">
                <div class="panel-heading medlab_panel_title">
                    Deleted Patient Registration
                </div>
                <div class="panel-body">
                    @if (count($patientRegistrationDeletedList))
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Patient Name</th>
                                <th>Clinic</th>
                                <th>Practitioner Name</th>
                                <th>Deleted</th>
                                <th>Details</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($patientRegistrationDeletedList as $patient)
                                <tr>
                                    <td>{{ $patient->first_name }} {{ $patient->last_name }}</td>
                                    <td>{{ $patient->practitioner_clinic }}</td>
                                    <td>{{ $patient->practitioner_name }}</td>
                                    <td>{{ $patient->deleted_at->diffForHumans() }}</td>
                                    <td><a class="btn btn-default" href="/account/patient-registration/{{ $patient->id }}">View</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <div class="alert alert-info" style="text-align: center; margin-bottom: 0px">
                           There are no deleted Registrations
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

