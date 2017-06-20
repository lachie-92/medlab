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
                    <a href="/account/pricing" class="list-group-item">Patient Pricing</a>
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
                    My Care Plans
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
                            No Patients
                        </div>

                    @else
                        <form method="GET" action="{{ route('account.careplan.index') }}">
                            <div class="row">
                                <div class="col-xs-6">

                                    <select class="form-control" name="patient">
                                        <option value="">— Select a patient to view their Care Plan history —</option>
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

                    @if (isset($careplans))
                        @if ($careplans->count() == 0)
                        <div class="alert alert-info" style="text-align: center">
                            No Care Plans
                        </div>
                        @else
                            <div class="row">
                                <div class="col-xs-12">
                                    <table class="container table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center">Care Plan No.</th>
                                                <th style="text-align: center">Date Created</th>
                                                <th style="text-align: center">Date Locked</th>
                                                <th style="text-align: center" colspan="3">&nbsp;</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($careplans as $careplan)
                                                <tr>
                                                    <td style="text-align: center">{{ $careplan->id }}</td>
                                                    <td style="text-align: center">{{ $careplan->created_at->toFormattedDateString() }}</td>
                                                    <td style="text-align: center">{{ $careplan->locked_at?$careplan->locked_at->toFormattedDateString():'Unlocked' }}</td>
                                                    <td style="text-align: center">
                                                        <a href="{{ route('account.careplan.view', [
                                                            'history' => $careplan->id
                                                        ]) }}" class="btn btn-default"><i class="fa fa-file-text-o" aria-hidden="true"></i> View</a>
                                                    </td>
                                                    @if (!$careplan->locked_at)
                                                    <td style="text-align: center">
                                                        <a href="{{ route('account.careplan.lock', [
                                                            'history' => $careplan->id
                                                        ]) }}" class="btn btn-default"><i class="fa fa-lock" aria-hidden="true"></i> Lock</a>
                                                    </td>
                                                    <td style="text-align: center">
                                                        <a href="{{ route('account.careplan.configure', [
                                                            'history' => $careplan->id
                                                        ]) }}" class="btn btn-default"><i class="fa fa-cogs" aria-hidden="true"></i> Settings</a>
                                                    </td>
                                                    @else
                                                    <td style="text-align: center">
                                                        <a href="{{ route('account.careplan.unlock', [
                                                            'history' => $careplan->id
                                                        ]) }}" class="btn btn-default"><i class="fa fa-unlock" aria-hidden="true"></i> Unlock</a>
                                                    </td>
                                                    @endif
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {!! $careplans->appends(['patient' => $patient->id])->render() !!}
                                </div>
                            </div>
                        @endif
                    @endif

                    @if ($user->consulting->count() > 0)
                    <h3>Consulting Care Plans</h3>
                    <ul>
                    @foreach ($user->consulting as $careplan)
                        <li><a href="{{ route('account.careplan.consulting', $careplan->id) }}">{{ $careplan->patient->user->customer->name }}</a> ({{ $careplan->created_at->format('d/m/Y') }} &mdash; {{ $careplan->pivot->description }})</li>
                    @endforeach
                    </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

