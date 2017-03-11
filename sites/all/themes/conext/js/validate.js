(function ($) {
    $(document).ready(function () {
        var arg0 = $("#arg0").val();
        if (arg0 == '' || arg0 == null || arg0 == 'node') $("#home").addClass('active');
        else $("#"+arg0).addClass('active');
        
        $("#about_submit").click(function () {
            var class_error = "error_input";
            var contact_name = $("#contact_name");
            var email_address = $("#email_address");
            var subject = $("#subject");
            var message = $("#message");

            if (contact_name.val() == ""
                    || email_address.val() == "" || !is_valid_email_address(email_address.val())
                    || subject.val() == ""
                    || message.val() == "") {
                if (contact_name.val() == "")
                    contact_name.addClass(class_error);
                if (email_address.val() == "" || !is_valid_email_address(email_address.val()))
                    email_address.addClass(class_error);
                if (subject.val() == "")
                    subject.addClass(class_error);
                if (message.val() == "")
                    message.addClass(class_error);

                alert("Please fill all mandatory fields");
                return false;
            } else {
                return true;
            }
        });

        $("#job_opening_submit").click(function () {
            var class_error = "error_input";
            var class_error_text = "error_text";
            var contact_name = $("#contact_name");
            var email_address = $("#email_address");
            var cv_file = $("#cv_file");
            var cv_file_name = $("#cv_file_name");
            var cover_letter = $("#cover_letter");

            if (contact_name.val() == ""
                    || email_address.val() == "" || !is_valid_email_address(email_address.val())
                    || cover_letter.val() == ""
                    || cv_file.val() == "") {
                if (contact_name.val() == "")
                    contact_name.addClass(class_error);
                if (email_address.val() == "" || !is_valid_email_address(email_address.val()))
                    email_address.addClass(class_error);
                if (cover_letter.val() == "")
                    cover_letter.addClass(class_error);
                if (cv_file.val() == "")
                    cv_file_name.addClass(class_error_text);

                alert("Please fill all mandatory fields");
                return false;
            } else {
                return true;
            }
        });

        $("#employer_register_submit, #employer_register_skip_job").click(function (e) {
            e.preventDefault();
            var class_error = "error_input";
            var first_name = $("#first_name");
            var email_address = $("#email_address");
            var password = $("#password");
            var re_password = $("#re_password");

            if (first_name.val() == ""
                    || email_address.val() == "" || !is_valid_email_address(email_address.val())
                    || password.val() == ""
                    || re_password.val() == "") {
                if (first_name.val() == "")
                    first_name.addClass(class_error);
                if (email_address.val() == "" || !is_valid_email_address(email_address.val()))
                    email_address.addClass(class_error);
                if (password.val() == "")
                    password.addClass(class_error);
                if (re_password.val() == "")
                    re_password.addClass(class_error);

                alert("Please fill all mandatory fields");
                return false;
            } else if (password.val() != re_password.val()) {
                password.addClass(class_error);
                re_password.addClass(class_error);
                alert("Password don't match");
                return false;
            } else {
                if ($(e.target).attr('id') == "employer_register_skip_job") $("#skip_job_post").val('1');
                $("#employer_profile").submit();
            }
        });
        
        $("#post_job_submit, #post_job_skip_job").click(function (e) {
            e.preventDefault();
            var class_error = "error_input";
            var title = $("#title");
            var location = $("#location");
            var industry = $("#industry");
            var qualification = $("#qualification");
            var salary_min = $("#salary_min");
            var salary_max = $("#salary_max");

            if ($(e.target).attr('id') == "post_job_skip_job") {
                $("#skip_job_post").val('1');
                $("#employer_post_job").submit();
            } else {
                if (title.val() == "" || location.val() == "" || qualification.val() == "" || 
                        industry.val() == "" || salary_min.val() == "" || salary_max.val() == "") {
                    if (title.val() == "") title.addClass(class_error);
                    if (location.val() == "") $(".location").addClass(class_error);
                    if (industry.val() == "") $(".industry").addClass(class_error);
                    if (qualification.val() == "") $(".qualification").addClass(class_error);
                    if (salary_min.val() == "") $(".salary_min").addClass(class_error);
                    if (salary_max.val() == "") $(".salary_max").addClass(class_error);

                    alert("Please fill all mandatory fields");
                    return false;
                } else if (parseInt(salary_min.val()) > parseInt(salary_max.val())) {
                    alert('Invalid minimum salary');
                } else {
                    $("#employer_post_job").submit();
                }
            }
        });
         
        $("#employer_account_save").click(function (e) {
            var class_error = "error_input";
            var first_name = $("#first_name");
            var email_address = $("#email_address");
            var password = $("#password");
            var re_password = $("#re_password");

            if (first_name.val() == "" || email_address.val() == "" || !is_valid_email_address(email_address.val())) {
                if (first_name.val() == "")
                    first_name.addClass(class_error);
                if (email_address.val() == "" || !is_valid_email_address(email_address.val()))
                    email_address.addClass(class_error);

                alert("Please fill all mandatory fields");
                return false;
            } else if (password.val() != re_password.val()) {
                password.addClass(class_error);
                re_password.addClass(class_error);
                alert("Password don't match");
                return false;
            } else {
                $("#employer_account").submit();
            }
        });
        
        $("#job_seeker_login_submit").click(function() {
            var class_error = "error_input";
            var username = $("#username");
            var password = $("#password");
            
            if (username.val() == "" || password.val() == "") {
                if (username.val() == "") username.addClass(class_error);
                if (password.val() == "") password.addClass(class_error);

                alert("Please fill all mandatory fields");
                return false;
            } else {
                return true;
            }
        });
        
        $("#job_seeker_account_submit").click(function (e) {
            var class_error = "error_input";
            var first_name = $("#first_name");
            var email_address = $("#email_address");
            var country = $("#country");
            var password = $("#password");
            var re_password = $("#re_password");

            if (country.val() == "" || first_name.val() == "" || email_address.val() == "" || !is_valid_email_address(email_address.val())) {
                if (first_name.val() == "")
                    first_name.addClass(class_error);
                if (email_address.val() == "" || !is_valid_email_address(email_address.val()))
                    email_address.addClass(class_error);
                if (country.val() == "") $(".country").addClass(class_error);

                alert("Please fill all mandatory fields");
                return false;
            } else if (password.val() != re_password.val()) {
                password.addClass(class_error);
                re_password.addClass(class_error);
                alert("Password don't match");
                return false;
            } else {
                $("#job_seeker_account").submit();
            }
        });
        
        $("#job_seeker_register_submit").click(function (e) {
            var class_error = "error_input";
            var first_name = $("#first_name");
            var email_address = $("#email_address");
            var country = $("#country");
            var password = $("#password");
            var re_password = $("#re_password");

            if (country.val() == "" || first_name.val() == "" || email_address.val() == "" || !is_valid_email_address(email_address.val())) {
                if (first_name.val() == "")
                    first_name.addClass(class_error);
                if (email_address.val() == "" || !is_valid_email_address(email_address.val()))
                    email_address.addClass(class_error);
                if (country.val() == "") $(".country").addClass(class_error);

                alert("Please fill all mandatory fields");
                return false;
            } else if (password.val() != re_password.val()) {
                password.addClass(class_error);
                re_password.addClass(class_error);
                alert("Password don't match");
                return false;
            } else {
                $("#job_seeker_register").submit();
            }
        });

        $("#job_submit_1, #job_submit_2").click(function (e) {
            var selecteditems = [];
            $("#job_type_option").find("input:checked").each(function (i, ob) { 
                selecteditems.push($(ob).val());
            });  
            $("#job_type").val(selecteditems);
        });
        
        $("#cv_file").change(function () {
            var file = this.files[0];
            var arrayExtensions = ["doc", "docx", "pdf"];
            var ext = this.value.slice((this.value.lastIndexOf(".") - 1 >>> 0) + 2);

            if (arrayExtensions.lastIndexOf(ext) == -1) {
                alert("You can only upload doc, docx and pdf file extension");
                this.value = null;
                $("#cv_file_name").html("Upload CV");
            }
        });
        
    })

    function is_valid_email_address(email_address) {
        var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
        return pattern.test(email_address);
    }

}(jQuery));