<script type="text/javascript">

    (function(){

        $(".product_modal_link").on("click", function() {
            $('#product_modal_image').attr('src', $(this).find('.product_image').attr('src'));
            $('#product_modal').modal('show');
        });

        $(".practitioner_info_btn").on("click", function() {

            $('#practitioner_info_link').attr('href', $(this).attr('link'));
            $('#practitioner_info_modal').modal('show');
        });

    })();

</script>