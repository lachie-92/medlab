<script type="text/javascript">

    var australiaOptions = {
        @foreach($auState as $key => $value)
        '{{ $key }}': '{{ $value }}',
        @endforeach
    };

    var newzealandOptions = {
        @foreach($nzRegion as $key => $value)
        '{{ $key }}': '{{ $value }}',
        @endforeach
    };

    (function(){

        $('#find_company_btn').click(function(e) {

            e.preventDefault();

            $.ajax({

                url: "/search/getcompanylist",
                data: {
                    _token: "{{ csrf_token() }}",
                    company_country: $('#company_country_select').val(),
                    company_state: $('#company_state_select').val(),
                    company_postcode: $('#company_postcode').val(),
                    company_suburb: $('#company_suburb').val(),
                    company_name: $('#company_name').val(),
                    company_type: $('#company_type').val(),
                    company_business_number: $('#company_business_number').val(),
                },
                type: "POST",
                dataType : "html",

                beforeSend: function(  ) {
                    var display = $('#find_company_display_box');
                    display.empty();
                },

                success: function( html ) {
                    var display = $('#find_company_display_box');
                    display.empty();
                    display.append(html);
                },

                error: function( xhr, status, errorThrown ) {
                    var errors = JSON.parse(xhr.responseText);
                    var output = "";
                    $.each(errors, function(index, value) {
                        output = output + value + "\n";
                    });
                    alert(output);
                }
            });
        });

        $('#create_new_clinic_btn').click(function(e) {

            e.preventDefault();

            $.ajax({

                url: "/account/practitioner-registration/createclinic",
                data: {
                    _token: "{{ csrf_token() }}",
                    company_name: $('#create_new_clinic_name').val(),
                    company_type: $('#create_new_business_type').val(),
                    company_business_number: $('#create_new_business_number').val(),
                    company_street: $('#create_new_street_address_one').val(),
                    company_suburb: $('#create_new_street_address_two').val(),
                    company_postcode: $('#create_new_postcode').val(),
                    company_country: $('#create_new_country_select').val(),
                    company_state: $('#create_new_state_select').val(),
                },
                type: "POST",
                dataType : "json",

                success: function( json ) {
                    alert(json.message);
                },

                error: function( xhr, status, errorThrown ) {
                    var errors = JSON.parse(xhr.responseText);
                    var output = "";
                    $.each(errors, function(index, value) {
                        output = output + value + "\n";
                    });
                    alert(output);
                }
            });
        });

    })();

</script>