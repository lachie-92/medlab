@extends('app')

@section('content')

@include('pages.account.dashboard.patient.main.partial.breadcrumbs')

<div class="container medlab_panel_container">
    <div class="row">
        <div class="col-xs-12">
            @include('pages.account.careplan.patient.edit.partial.page1')
            @include('pages.account.careplan.patient.edit.partial.page2')
            @if (! is_null($consultant_data->progress))
                @include('pages.account.careplan.consultant.view.partial.content')
            @elseif (!is_null($consultant_data->target) && $consultant_data->target <= \Carbon\Carbon::now())
                @include('pages.account.careplan.consultant.edit.partial.progress')
            @elseif (!is_null($consultant_data->target))
                @include('pages.account.careplan.consultant.view.partial.content')
            @else
                @include('pages.account.careplan.consultant.edit.partial.goal')
            @endif

        </div>
    </div>
</div>
@endsection
