<!-----------------------------------------------------------------------------------
--
-- View My orders Information
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
                    My Account
                </div>

                <div class="list-group">
                    <a href="/account" class="list-group-item">Dashboard</a>
                    <a href="/account/edit" class="list-group-item">Edit Account Details</a>
                    <a href="/account/orders" class="list-group-item">My Orders</a>
                    <a href="/account/patient-history" class="list-group-item">My Histories</a>
                    <a href="/account/careplan" class="list-group-item"><strong>My Care Plans</strong></a>
                    <a href="/account/logout" class="list-group-item">Logout</a>
                </div>

            </div>
        </div>
        <!--
        -- Main Content Column
        -->
        <div class="col-md-9 col-sm-9 col-xm-12">
            <!--
            -- Orders Information List
            -->
            <div class="panel panel-primary medlab_panel">
                <div class="panel-heading medlab_panel_title">
                    <h3 class="panel-title pull-left">
                        My Care Plans
                    </h3>
                    <a href="{{ route('account.careplan.new') }}" class="btn btn-primary pull-right">New Care Plan</a>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-body">

                    @if (session('message'))
                        <div class="container-fluid">
                            <div class="alert alert-success" style="text-align: center">
                                {{ session('message') }}
                            </div>
                        </div>
                    @endif

                    @if (count($user->patient->careplans) == 0)

                        <div class="alert alert-info" style="text-align: center">
                            No Care Plans
                        </div>

                    @else

                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th style="text-align: center">History No.</th>
                                    <th style="text-align: center">Date Created</th>
                                    <th style="text-align: center">History Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user->patient->careplans as $history)
                                    <tr>
                                        <td style="text-align: center">{{ $history->id }}</td>
                                        <td style="text-align: center">{{ $history->created_at->toFormattedDateString() }}</td>
                                        <td style="text-align: center">
                                            <a href="{{ route('account.patient-history.view', [
                                                'history' => $history->id
                                            ]) }}" class="btn btn-default"><i class="fa fa-file-text-o" aria-hidden="true"></i> View</a>
                                        </td>
                                        <td style="text-align: center">
                                            @if (!$history->locked_at)
                                            <a href="{{ route('account.patient-history.edit', [
                                                'history' => $history->id,
                                                'page'    => 1,
                                            ]) }}" class="btn btn-default"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
                                            @else
                                            <i class="fa fa-lock" aria-hidden="true"></i> Locked
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    @endif

                </div>
            </div>
        </div>
    </div>
</div>

