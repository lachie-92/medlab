<!-----------------------------------------------------------------------------------
--
-- Dashboard
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
                    <a href="/account" class="list-group-item"><strong>Dashboard</strong></a>
                    <a href="/account/edit" class="list-group-item">Patient Registration</a>
                    <a href="/account/order" class="list-group-item">Practitioner Registration</a>
                    <a href="/account/logout" class="list-group-item">Logout</a>
                </div>

            </div>
        </div>
        <!--
        -- Main Content Column
        -->
        <div class="col-md-9 col-sm-9 col-xm-12">
            <!--
            -- Patient Registration
            -->
            <div class="panel panel-primary medlab_panel">
                <div class="panel-heading medlab_panel_title">
                    Patient Registration
                </div>
                <table class="table">
                    <tbody>
                        <tr>
                            <th>Patient Name</th>
                            <th>Clinic</th>
                            <th>Practitioner Name</th>
                            <th></th>
                        </tr>
                        @foreach ($patientRegistrationList as $patient)
                            <tr>
                                <td>{{ $patient->first_name }} {{ $patient->last_name }}</td>
                                <td>{{ $patient->practitioner_clinic }}</td>
                                <td>{{ $patient->practitioner_name }}</td>
                                <td><a class="btn btn-default">View</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!--
            -- Practitioner Registration
            -->
            <div class="panel panel-primary medlab_panel">
                <div class="panel-heading medlab_panel_title">
                    Practitioner Registration
                </div>
                <div class="panel-body">

                </div>
            </div>

        </div>
    </div>
</div>

