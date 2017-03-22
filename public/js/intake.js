$(document).ready(function() {
    $('.shadowCheckbox').click(function() {
        $('input#' + $(this).attr('id').substring(1)).val($(this).prop('checked')?1:0);
    })
});
