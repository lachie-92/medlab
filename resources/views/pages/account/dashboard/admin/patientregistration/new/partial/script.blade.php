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

        $('#change_password_btn').click(function() {

            var $changePassword = $('#change_password');

            if($changePassword.is(':checked')){
                $('#password_change_box input').each(function() {
                    $(this).prop('disabled', true);
                });
                $changePassword.prop('checked', false);
                $(this).html('Change Password: No');
            } else {
                $('#password_change_box input').each(function() {
                    $(this).prop('disabled', false);
                });
                $changePassword.prop('checked', true);
                $(this).html("Change Password: Yes");
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