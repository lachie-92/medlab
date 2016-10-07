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
        
        $('#practitioner_not_found').change(function() {

            if($(this).is(':checked')){
                $("#practitioner_manual_handling").collapse("show");
            } else {
                $("#practitioner_manual_handling").collapse("hide");
            }

            $("#practitioner_not_found_state_select").val($("#practitioner_state_select").val());
            $("#practitioner_not_found_country").val($("#practitioner_country_select").val());
            $("#practitioner_not_found_postcode").val($("#practitioner_postcode").val());
            $("#practitioner_not_found_clinic").val($("#practitioner_clinic").val());
            $("#practitioner_not_found_practitioner_name").val($("#practitioner_first_name").val() + " " + $("#practitioner_last_name").val());

        });

        $('#find_practitioner_btn').click(function(e) {

            e.preventDefault();

            $.ajax({

                url: "/search/getpractitionerlist",
                data: {
                    _token: "{{ csrf_token() }}",
                    practitioner_country: $('#practitioner_country_select').val(),
                    practitioner_state: $('#practitioner_state_select').val(),
                    practitioner_postcode: $('#practitioner_postcode').val(),
                    practitioner_suburb: $('#practitioner_suburb').val(),
                    practitioner_clinic: $('#practitioner_clinic').val(),
                    practitioner_first_name: $('#practitioner_first_name').val(),
                    practitioner_last_name: $('#practitioner_last_name').val()
                },
                type: "POST",
                dataType : "html",

                beforeSend: function(  ) {
                    var display = $('#find_practitioner_display_box');
                    display.empty();
                    display.append("<p style='text-align: center; font-size: larger'><strong>Processing...</strong></p>");
                },

                success: function( html ) {
                    var display = $('#find_practitioner_display_box');
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

    })();

</script>