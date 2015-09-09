<script type="text/javascript">

    (function(){

        var $countrySelector = $('#country_select');
        var $stateSelector = $('#state_select');
        var $practitionerCountrySelector = $('#practitioner_country_select');
        var $practitionerStateSelector = $('#practitioner_state_select');
        var $practitionerNotFoundCountrySelector = $('#practitioner_not_found_country_select');
        var $practitionerNotFoundStateSelector = $('#practitioner_not_found_state_select');

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

        $practitionerCountrySelector.on('change', function(e) {

            var countrySelected = $(this).val();

            if (countrySelected == 'AU') {
                $practitionerStateSelector.empty();
                $.each(australiaOptions, function(value,key) {
                    $practitionerStateSelector.append('<option value="' + value + '">' + key + '</option>');
                });
            }
            if (countrySelected == 'NZ') {
                $practitionerStateSelector.empty();
                $.each(newzealandOptions, function(value,key) {
                    $practitionerStateSelector.append('<option value="' + value + '">' + key + '</option>');
                });
            }
        });

        $practitionerNotFoundCountrySelector.on('change', function(e) {

            var countrySelected = $(this).val();

            if (countrySelected == 'AU') {
                $practitionerNotFoundStateSelector.empty();
                $.each(australiaOptions, function(value,key) {
                    $practitionerNotFoundStateSelector.append('<option value="' + value + '">' + key + '</option>');
                });
            }
            if (countrySelected == 'NZ') {
                $practitionerNotFoundStateSelector.empty();
                $.each(newzealandOptions, function(value,key) {
                    $practitionerNotFoundStateSelector.append('<option value="' + value + '">' + key + '</option>');
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


        $('#practitioner_not_found').change(function() {

            if($(this).is(':checked')){
                $("#practitioner_manual_handling").collapse("show");
            } else {
                $("#practitioner_manual_handling").collapse("hide");
            }
        });

        $('#find_practitioner_btn').click(function(e) {

            e.preventDefault();

            $.ajax({

                url: "/account/register/patient/getpractitionerlist",
                data: {
                    _token: "{{ csrf_token() }}",
                    practitioner_country: $('#practitioner_country_select').val(),
                    practitioner_state: $('#practitioner_state_select').val(),
                    practitioner_city: $('#practitioner_city').val(),
                    practitioner_postcode: $('#practitioner_postcode').val(),
                    practitioner_suburb: $('#practitioner_suburb').val()
                },
                type: "POST",
                dataType : "html",

                success: function( html ) {
                    var display = $('#find_practitioner_display_box');
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