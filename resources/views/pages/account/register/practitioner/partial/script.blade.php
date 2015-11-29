<script type="text/javascript">

    (function(){

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

        var toggleStateOption = function(e) {

            var $country_option = $(this);
            var countrySelected = $country_option.val();
            var $target = $('#' + $country_option.attr('data-change-state'));

            if (countrySelected == 'AU') {
                $target.empty();
                $.each(australiaOptions, function(value,key) {
                    $target.append('<option value="' + value + '">' + key + '</option>');
                });
            }
            if (countrySelected == 'NZ') {
                $target.empty();
                $.each(newzealandOptions, function(value,key) {
                    $target.append('<option value="' + value + '">' + key + '</option>');
                });
            }
        };

        $('select[data-change-state]').on('change', toggleStateOption);

    })();

</script>