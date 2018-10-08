<!-----------------------------------------------------------------------------------
--
-- Practitioner Registration
--
------------------------------------------------------------------------------------->

<div class="container medlab_panel_container">
    <div class="row">
        <!--
        -- Account Navigation
        -->
        <div class="col-md-3 col-sm-3 col-xm-12">
            @include('pages.account.dashboard.admin._sharedpartial.sidenavigation',
                ['view_current_page' => 'Practitioner'])
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
            -- Practitioner Registration
            -->
            <div class="panel panel-primary medlab_panel">
                <div class="panel-heading medlab_panel_title">
                    New Practitioner Registration
                </div>
                <div class="panel-body">
                    @if (count($practitionerRegistrationList))
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Practitioner Name</th>
                                <th>Association Number</th>
                                <th>Association Name</th>
                                <th>Clinic</th>
                                <th>Received</th>
                                <th>Details</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($practitionerRegistrationList as $practitioner)
                                <tr>
                                    <td>{{ $practitioner->first_name }} {{ $practitioner->last_name }}</td>
                                    <td>{{ $practitioner->association_number }}</td>
                                    <td>{{ $practitioner->association_type }}</td>
                                    <td>{{ $practitioner->clinic_name }}</td>
                                    <td>{{ $practitioner->created_at->diffForHumans() }}</td>
                                    <td><a class="btn btn-default" href="/account/practitioner-registration/{{ $practitioner->id }}">View</a></td>
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
             -- Approved Practitioner Registration
             -->
            <div class="panel panel-primary medlab_panel">
                <div class="panel-heading medlab_panel_title">
                    Approved Practitioner Registration
                </div>
                <div class="panel-body">
                    @if (count($practitionerRegistrationApprovedList))
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Practitioner Name</th>
                                <th>Association Number</th>
                                <th>Association Name</th>
                                <th>Clinic</th>
                                <th>Approved</th>
                                <th>Details</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($practitionerRegistrationApprovedList as $practitioner)
                                <tr>
                                    <td>{{ $practitioner->first_name }} {{ $practitioner->last_name }}</td>
                                    <td>{{ $practitioner->association_number }}</td>
                                    <td>{{ $practitioner->association_type }}</td>
                                    <td>{{ $practitioner->clinic_name }}</td>
                                    <td>{{ $practitioner->approval->diffForHumans() }}</td>
                                    <td><a class="btn btn-default" href="/account/practitioner-registration/{{ $practitioner->id }}">View</a></td>
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
             -- Deleted Practitioner Registration
             -->
            <div class="panel panel-primary medlab_panel">
                <div class="panel-heading medlab_panel_title">
                    Deleted Practitioner Registration
                </div>
                <div class="panel-body">
                    @if (count($practitionerRegistrationDeletedList))
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Practitioner Name</th>
                                <th>Association Number</th>
                                <th>Association Name</th>
                                <th>Clinic</th>
                                <th>Deleted</th>
                                <th>Details</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($practitionerRegistrationDeletedList as $practitioner)
                                <tr>
                                    <td>{{ $practitioner->first_name }} {{ $practitioner->last_name }}</td>
                                    <td>{{ $practitioner->association_number }}</td>
                                    <td>{{ $practitioner->association_type }}</td>
                                    <td>{{ $practitioner->clinic_name }}</td>
                                    <td>{{ $practitioner->deleted_at->diffForHumans() }}</td>
                                    <td><a class="btn btn-default" href="/account/practitioner-registration/{{ $practitioner->id }}">View</a></td>
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

