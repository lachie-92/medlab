<script type="text/javascript">

    (function(){

        $("#product_modal_link").on("click", function() {
            $('#product_modal_image').attr('src', $('#product_image').attr('src'));
            $('#product_modal').modal('show');
        });

    })();

</script>