@extends('app')

@section('content')

@include('pages.account.dashboard.patient.main.partial.breadcrumbs')
@include('pages.account.patient-history.patient.edit.partial.page'.$page)
@endsection

@section('custom_script')
<script type="text/javascript" src="/js/jquery.jqscribble.js"></script>
<script>
    $(document).ready(function() {
        $('#canvas_diagram_front').jqScribble({
            backgroundImage: '/img/account/patient-history/body-front.png'
        });

        $('#canvas_diagram_back').jqScribble({
            backgroundImage: '/img/account/patient-history/body-front.png'
        });

        $('form#page4').on('submit', function() {
            $("#canvas_diagram_front").data("jqScribble").save(function(imageData)
            {
                $('#diagram_front').val(imageData);
            });

            $("#canvas_diagram_back").data("jqScribble").save(function(imageData)
            {
                $('#diagram_back').val(imageData);
            });
        })
    })
</script>
@endsection
