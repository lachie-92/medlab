<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<script type="text/javascript">

    (function(){

        Stripe.setPublishableKey('pk_test_WGwDfHMAO1HCHmWYebYxFliu');
        var $error_box = $('#payment_error_box');
        $error_box.hide();

        function stripeResponseHandler(status, response) {

            var $form = $('#payment-form');

            if (response.error) {
                // Show the errors on the form
                $error_box.text(response.error.message).show();
                $form.find('#button_payment').prop('disabled', false);
            } else {
                // response contains id and card, which contains additional card details
                var token = response.id;
                // Insert the token into the form so it gets submitted to the server
                $form.append($('<input type="hidden" name="stripeToken" />').val(token));
                // and submit
                $form.get(0).submit();
            }
        };

        $('#payment-form').submit(function(event) {
            var $form = $(this);

            // Disable the submit button to prevent repeated clicks
            $form.find('#button_payment').prop('disabled', true);

            Stripe.card.createToken($form, stripeResponseHandler);

            // Prevent the form from submitting with the default action
            return false;
        });

    })();

</script>



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