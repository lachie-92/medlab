<script type="text/javascript">

    $('#credit_app_collapse').addClass('collapse');
    $('#is_owner_collapse').addClass('collapse');

    var $credit_application_radio = $('input[name=credit_application]:radio');
    var $is_owner_radio = $('input[name=is_owner]:radio');

    if($('input[name=credit_application]:checked').val() == 1) {
        $('#credit_app_collapse').removeClass('collapse');
    }
    if($('input[name=is_owner]:checked').val() == 0) {
        $('#is_owner_collapse').removeClass('collapse');
    }

    $credit_application_radio.change(function() {
        if($(this).val() == 1) {
            $('#credit_app_collapse').removeClass('collapse');
        }
        else if($(this).val() == 0) {
            $('input[name=is_owner]:radio').prop('checked', false);
            $('input[name=been_bankrupt]:radio').prop('checked', false);
            $('input[name=been_refused_credit]:radio').prop('checked', false);
            $('#credit_app_collapse').addClass('collapse');
            $('#is_owner_collapse').addClass('collapse');
        }
    });

    $is_owner_radio.change(function() {
        if($(this).val() == 0) {
            $('#is_owner_collapse').removeClass('collapse');
        }
        else if($(this).val() == 1) {
            $('#is_owner_collapse').addClass('collapse');
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