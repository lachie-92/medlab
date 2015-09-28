<script type="text/javascript">

    (function(){

        var $countrySelector = $('#country_select');
        var $stateSelector = $('#state_select');

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

        var togglePaymentOption = function(e) {

            var $payment_option = $(this);
            var target = $payment_option.attr('data-payment-option');

            if(target == 'payment_option_paypal') {
                $('#payment_option_paypal').prop('checked', true);
                $('#payment_option_visa').prop('checked', false);
                $('#visa_box').collapse('hide');
            }

            if(target == 'payment_option_visa') {
                $('#payment_option_paypal').prop('checked', false);
                $('#payment_option_visa').prop('checked', true);
                $('#paypal_box').collapse('hide');
            }
        }

        $('div[data-payment-option]').on('click', togglePaymentOption);

    })();

</script>