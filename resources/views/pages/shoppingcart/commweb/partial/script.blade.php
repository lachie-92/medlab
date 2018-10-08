<script src="https://js.braintreegateway.com/v2/braintree.js"></script>

<script type="text/javascript">

    (function(){

        $('#payment-form').submit(function(event) {
            var $form = $(this);

            // Disable the submit button to prevent repeated clicks
            $form.find('#button_payment').prop('disabled', true);

            return true;
        });

    })();

</script>