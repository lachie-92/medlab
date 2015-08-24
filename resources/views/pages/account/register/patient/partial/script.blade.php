<script type="text/javascript">

    (function(){

        var $countrySelector = $('#country_select');
        var $stateSelector = $('#state_select');
        var $practitionerCountrySelector = $('#practitioner_country_select');
        var $practitionerStateSelector = $('#practitioner_state_select');

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

    })();

</script>