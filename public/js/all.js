(function(){

    var toggleStateOption = function(e) {

        var $country_option = $(this);
        var countrySelected = $country_option.val();
        var $target = $('#' + $country_option.attr('data-change-state'));

        if (countrySelected == 'Australia') {
            $target.empty();
            $.each(australiaOptions, function(value,key) {
                $target.append('<option value="' + value + '">' + key + '</option>');
            });
        }
        if (countrySelected == 'New Zealand') {
            $target.empty();
            $.each(newzealandOptions, function(value,key) {
                $target.append('<option value="' + value + '">' + key + '</option>');
            });
        }
    };

    $('select[data-change-state]').on('change', toggleStateOption);

})();
//# sourceMappingURL=all.js.map
