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
                    <a href="/account/careplan" class="list-group-item">My Care Plans</a>
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

                    @if (count($user->patients) == 0)

                        <div class="alert alert-info" style="text-align: center">
                            No Histories
                        </div>

                    @else
                        <form method="GET" action="{{ route('account.patient-history.index') }}">
                            <div class="row">
                                <div class="col-xs-6">

                                    <select class="form-control" name="patient">
                                        <option value="">— Select a patient to view their histories —</option>
                                        @foreach ($user->patients as $userPatient)
                                        <option value="{{$userPatient->id}}" {{ isset($patient)&&$userPatient->id==$patient->id?'selected="selected"':'' }}>{{ $userPatient->user->customer->last_name }}, {{ $userPatient->user->customer->first_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-xs-6">
                                    <button type="submit" class="btn btn-default">go</button>
                                </div>
                            </div>
                        </form>
                    @endif

                    @if (isset($histories))
                        @if ($histories->count() == 0)
                        <div class="alert alert-info" style="text-align: center">
                            No Histories
                        </div>
                        @else

                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th style="text-align: center">History No.</th>
                                    <th style="text-align: center">Patient</th>
                                    <th style="text-align: center">Date Created</th>
                                    <th style="text-align: center">History Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($histories as $history)
                                <tr>
                                    <td style="text-align: center">{{ $history->id }}</td>
                                    <td style="text-align: center">{{ $history->patient->user->customer->last_name }}, {{ $history->patient->user->customer->first_name }}</td>
                                    <td style="text-align: center">{{ $history->created_at->toFormattedDateString() }}</td>
                                    <td style="text-align: center">{{ $history->locked_at?'Locked':'In progress' }}</td>
                                    <td style="text-align: center">
                                        <a href="{{ route('account.patient-history.view', [
                                            'history' => $history->id
                                        ]) }}" class="btn btn-default"><i class="fa fa-file-text-o" aria-hidden="true"></i> View</a>
                                    </td>
                                    <td style="text-align: center">
                                        @if (!$history->locked_at)
                                        <a href="{{ route('account.patient-history.lock', [
                                            'history' => $history->id
                                        ]) }}" class="btn btn-default"><i class="fa fa-lock" aria-hidden="true"></i> Lock</a>
                                        @else
                                        <a href="{{ route('account.patient-history.unlock', [
                                            'history' => $history->id
                                        ]) }}" class="btn btn-default"><i class="fa fa-unlock" aria-hidden="true"></i> Unlock</a>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {!! $histories->appends(['patient' => $patient->id])->render() !!}
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

