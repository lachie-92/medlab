<script type="text/javascript">

    (function(){

        var heights = $(".eq_height").map(function () {
            return $(this).height();
        }).get(),

        maxHeight = Math.max.apply(null, heights);

        $(".eq_height").height(maxHeight);

    })();

</script>