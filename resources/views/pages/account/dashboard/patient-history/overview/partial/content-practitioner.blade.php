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
                    <a href="/account/patient-history" class="list-group-item"><strong>My Histories</strong></a>
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
                        My Patient Histories
                    </h3>
                    <a href="{{ route('account.patient-history.new') }}" class="btn btn-primary pull-right">New History</a>
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

                    @if (true || count($user->patient->histories) == 0)

                        <div class="alert alert-info" style="text-align: center">
                            No Histories
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
                                @foreach ($user->patient->histories as $history)
                                    <tr>
                                        <td style="text-align: center">{{ $history->id }}</td>
                                        <td style="text-align: center">{{ $history->created_at->toFormattedDateString() }}</td>
                                        <td style="text-align: center">{{ $history->locked_at?'Locked':'In progress' }}</td>
                                        <td style="text-align: center">
                                            <a href="{{ route('account.patient-history.view', [
                                                'history' => $history->id
                                            ]) }}" class="btn btn-default">View</a>
                                        </td>
                                        <td style="text-align: center">
                                            @if (!$history->locked_at)
                                            <a href="{{ route('account.patient-history.edit', [
                                                'history' => $history->id,
                                                'page'    => 1,
                                            ]) }}" class="btn btn-default">Edit</a>
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

