<script src="https://js.braintreegateway.com/v2/braintree.js"></script>

<script type="text/javascript">

    (function(){

        var clientToken = "{{ $clientToken }}";

        braintree.setup(clientToken, "dropin", {
            container: "braintree-container",
            form: "payment-form",
            onPaymentMethodReceived: function(data) {
                var $form = $('#payment-form');
                $form.find('#button_payment').prop('disabled', true);
                $form.append($('<input type="hidden" name="payment_token" />').val(data.nonce));
                $form.append($('<input type="hidden" name="payment_type" />').val(data.type));
                $form.get(0).submit();
            }
        });

    })();

</script>