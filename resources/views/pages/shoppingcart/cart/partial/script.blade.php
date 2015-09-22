<script type="text/javascript">

    (function(){

        var incrementQty = function(e) {

            var $button = $(this);
            var $product_qty_input = $('#' + $button.attr('target'));
            var quantity = parseInt($product_qty_input.val());

            if (isNaN(quantity)) {
                $product_qty_input.val(1);
            }
            else {
                if (quantity < 1) {
                    $product_qty_input.val(1);
                }
                else {
                    $product_qty_input.val(quantity+1);
                }
            }

            e.preventDefault();
        }

        var decrementQty = function(e) {

            var $button = $(this);
            var $product_qty_input = $('#' + $button.attr('target'));
            var quantity = parseInt($product_qty_input.val());

            if (isNaN(quantity)) {
                $product_qty_input.val(1);
            }
            else {
                if (quantity <= 1) {
                    $product_qty_input.val(1);
                }
                else {
                    $product_qty_input.val(quantity-1);
                }
            }

            e.preventDefault();
        }

        $('button[data-qty-plus-button]').on('click', incrementQty);
        $('button[data-qty-minus-button]').on('click', decrementQty);

    })();

</script>