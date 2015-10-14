<script type="text/javascript">

    (function(){

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
        }

        $('select[data-change-state]').on('change', toggleStateOption);

    })();

</script>