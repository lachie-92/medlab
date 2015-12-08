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

            if (countrySelected == 'Australia') {
                $target.empty();
                $.each(australiaOptions, function(value,key) {
                    $target.append('<option value="' + value + '">' + key + '</option>');
                });
            }
            if (countrySelected == 'New Zealand') {
                $target.empty();
                $.each(newzealandOptions, function(value,key) {
                    $target.append('<option value="' + value + '">' + key + '</option>');
                });
            }
        };

        $('select[data-change-state]').on('change', toggleStateOption);

        $('#change_password_btn').click(function() {

            var $changePassword = $('#change_password');

            if($changePassword.is(':checked')){
                $('#password_change_box input').each(function() {
                    $(this).prop('disabled', true);
                });
                $changePassword.prop('checked', false);
                $(this).html('Change Password: No');
            } else {
                $('#password_change_box input').each(function() {
                    $(this).prop('disabled', false);
                });
                $changePassword.prop('checked', true);
                $(this).html("Change Password: Yes");
            }
        });

        $('#find_company_btn').click(function(e) {

            e.preventDefault();

            $.ajax({

                url: "/search/getcompanylist",
                data: {
                    _token: "{{ csrf_token() }}",
                    company_country: $('#company_country_select').val(),
                    company_state: $('#company_state_select').val(),
                    company_postcode: $('#company_postcode').val(),
                    company_suburb: $('#company_suburb').val(),
                    company_name: $('#company_name').val(),
                    company_type: $('#company_type').val(),
                    company_business_number: $('#company_business_number').val(),
                },
                type: "POST",
                dataType : "html",

                success: function( html ) {
                    var display = $('#find_company_display_box');
                    display.empty();
                    display.append(html);
                },

                error: function( xhr, status, errorThrown ) {
                    var errors = JSON.parse(xhr.responseText);
                    var output = "";
                    $.each(errors, function(index, value) {
                        output = output + value + "\n";
                    });
                    alert(output);
                }
            });
        });

    })();

</script>