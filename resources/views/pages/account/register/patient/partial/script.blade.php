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
                    practitioner_clinic: $('#practitioner_clinic').val()
                },
                type: "POST",
                dataType : "html",

                beforeSend: function(  ) {
                    var display = $('#find_practitioner_display_box');
                    display.empty();
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