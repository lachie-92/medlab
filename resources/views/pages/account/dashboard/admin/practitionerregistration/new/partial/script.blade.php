<script type="text/javascript">

    (function(){

        var $countrySelector = $('#country_select');
        var $stateSelector = $('#state_select');
        var $companyCountrySelector = $('#company_country_select');
        var $companyStateSelector = $('#company_state_select');

        var australiaOptions = {
            'ACT': 'ACT',
            'NSW': 'NSW',
            'NT': 'NT',
            'QLD': 'QLD',
            'SA': 'SA',
            'TAS': 'TAS',
            'VIC': 'VIC',
            'WA': 'WA'
        };

        var newzealandOptions = {
            'Northland': 'Northland',
            'Auckland': 'Auckland',
            'Waikato': 'Waikato',
            'Bay of Plenty': 'Bay of Plenty',
            'Gisborne': 'Gisborne',
            "Hawke's Bay": "Hawke's Bay",
            'Taranaki': 'Taranaki',
            'Manawatu-Wanganui': 'Manawatu-Wanganui',
            'Wellington': 'Wellington',
            'Tasman': 'Tasman',
            'Nelson': 'Nelson',
            'Marlborough': 'Marlborough',
            'West Coast': 'West Coast',
            'Canterbury': 'Canterbury',
            'Otago': 'Otago',
            'Southland': 'Southland'
        };

        $countrySelector.on('change', function(e) {

            var countrySelected = $(this).val();

            if (countrySelected == 'AU') {
                $stateSelector.empty();
                $.each(australiaOptions, function(value,key) {
                    $stateSelector.append('<option value="' + value + '">' + key + '</option>');
                });
            }
            if (countrySelected == 'NZ') {
                $stateSelector.empty();
                $.each(newzealandOptions, function(value,key) {
                    $stateSelector.append('<option value="' + value + '">' + key + '</option>');
                });
            }
        });

        $companyCountrySelector.on('change', function(e) {

            var countrySelected = $(this).val();

            if (countrySelected == 'AU') {
                $companyStateSelector.empty();
                $.each(australiaOptions, function(value,key) {
                    $companyStateSelector.append('<option value="' + value + '">' + key + '</option>');
                });
            }
            if (countrySelected == 'NZ') {
                $companyStateSelector.empty();
                $.each(newzealandOptions, function(value,key) {
                    $companyStateSelector.append('<option value="' + value + '">' + key + '</option>');
                });
            }
        });

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

                url: "/account/practitioner-registration/getcompanylist",
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