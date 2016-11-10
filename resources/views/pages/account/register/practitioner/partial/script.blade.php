<script type="text/javascript">

    $('#collapsible').addClass('collapse');

    var $credit_application_radio = $('input[name=credit_application]:radio');

    if($('input[name=credit_application]:checked').val() == 1) {
        $('#collapsible').removeClass('collapse');
    }

    $credit_application_radio.change(function() {
        if($(this).val() == 1) {
            $('#collapsible').removeClass('collapse');
        }
        else if($(this).val() == 0) {
            $('#collapsible').addClass('collapse');
        }
    });

    var australiaOptions = {
        @foreach($auState as $key => $value)
            '{{ $key }}': '{{ $value }}',
        @endforeach
    };

    var newzealandOptions = {
        @foreach($nzRegion as $key => $value)
            '{{ $key }}': '{{ $value }}',
        @endforeach
    };

</script>