<script type="text/javascript">

    (function(){

        var $companyCountrySelector = $('#company_country_select');
        var $companyStateSelector = $('#company_state_select');
        var $createNewCountrySelector = $('#create_new_country_select');
        var $createNewStateSelector = $('#create_new_state_select');

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

        $createNewCountrySelector.on('change', function(e) {

            var countrySelected = $(this).val();

            if (countrySelected == 'AU') {
                $createNewStateSelector.empty();
                $.each(australiaOptions, function(value,key) {
                    $createNewStateSelector.append('<option value="' + value + '">' + key + '</option>');
                });
            }
            if (countrySelected == 'NZ') {
                $createNewStateSelector.empty();
                $.each(newzealandOptions, function(value,key) {
                    $createNewStateSelector.append('<option value="' + value + '">' + key + '</option>');
                });
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

                beforeSend: function(  ) {
                    var display = $('#find_company_display_box');
                    display.empty();
                },

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

        $('#create_new_clinic_btn').click(function(e) {

            e.preventDefault();

            $.ajax({

                url: "/account/practitioner-registration/createclinic",
                data: {
                    _token: "{{ csrf_token() }}",
                    company_name: $('#create_new_clinic_name').val(),
                    company_type: $('#create_new_business_type').val(),
                    company_business_number: $('#create_new_business_number').val(),
                    company_street: $('#create_new_street_address_one').val(),
                    company_suburb: $('#create_new_street_address_two').val(),
                    company_city: $('#create_new_city').val(),
                    company_postcode: $('#create_new_postcode').val(),
                    company_country: $('#create_new_country_select').val(),
                    company_state: $('#create_new_state_select').val(),
                },
                type: "POST",
                dataType : "json",

                success: function( json ) {
                    alert(json.message);
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