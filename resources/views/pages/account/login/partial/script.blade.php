<script type="text/javascript">

    (function(){

        var $practitionerBox = $("#clinicianBox");
        var $patientBox = $("#patientBox");
        var $registerLink = $('#registerLink');

        $practitionerBox.on("click", function() {

            unfocusOnBox($patientBox);
            focusOnBox($practitionerBox);

            $registerLink.html('Create Practitioner Account');
            $registerLink.attr("href", "/account/register/practitioner")
        });

        $patientBox.on("click", function() {

            unfocusOnBox($practitionerBox);
            focusOnBox($patientBox);

            $registerLink.html('Create Patient Account');
            $registerLink.attr("href", "/account/register/patient")
        });

        function focusOnBox($box) {

            $box.removeClass('medlab_registration_account_box');
            $box.addClass('medlab_registration_account_box_focus');
        }

        function unfocusOnBox($box) {

            $box.removeClass('medlab_registration_account_box_focus');
            $box.addClass('medlab_registration_account_box');
        }

    })();

</script>