<script type="text/javascript">

    (function(){

        var $clinicianBox = $("#clinicianBox");
        var $patientBox = $("#patientBox");
        var $registerLink = $('#registerLink');

        $clinicianBox.on("click", function() {

            unfocusOnBox($patientBox);
            focusOnBox($clinicianBox);

            $registerLink.html('Create Clinician Account');
            $registerLink.attr("href", "/account/register/clinician")
        });

        $patientBox.on("click", function() {

            unfocusOnBox($clinicianBox);
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