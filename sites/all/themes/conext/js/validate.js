(function ($) {
    $(document).ready(function () {
        var arg0 = $("#arg0").val();
        if (arg0 == '' || arg0 == null || arg0 == 'home') $("#home").addClass('active');
        else $("#"+arg0).addClass('active');
        
        $('html').bind('keypress', function(e) {
            if(e.keyCode === 10 || e.keyCode == 13) return false;
         });
        
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
                var captcha = $("#captcha").val();
                if (captcha == null || captcha == '') {
                    alert('Invalid Captcha');
                    return false;
                } 
                /*else {
                    $.ajax({
                        type: "GET",
                        url: $("#verify_url").val(),
                        data: "captcha=" + captcha
                    }).done(function(status) {
                        alert(status);
                        if (status == "ok") {
                            return true;
                        } else {
                            alert('Invalid Captcha');
                            return false;
                        }
                    });
                }*/
            }
        });

        $("#employer_register_submit, #employer_register_skip_job").click(function (e) {
            e.preventDefault();
            var class_error = "error_input";
            var first_name = $("#first_name");
            var email_address = $("#email_address");
            var password = $("#password");
            var re_password = $("#re_password");
            var last_name = $("#last_name");
            var phone = $("#phone");
            var company = $("#company");
            var address = $("#address");
            var city = $("#city");
            var industry = $("#industry");
            var salutation = $("#salutation");

            $("."+class_error).removeClass(class_error);
            if (first_name.val() == ""
                    || email_address.val() == "" || !is_valid_email_address(email_address.val())
                    || password.val() == "" || re_password.val() == "" || last_name.val() == ""
                    || phone.val() == "" || company.val() == "" || address.val() == ""
                    || city.val() == "" || industry.val() == "" || salutation.val() == "") {
                if (first_name.val() == "")
                    first_name.addClass(class_error);
                if (email_address.val() == "" || !is_valid_email_address(email_address.val()))
                    email_address.addClass(class_error);
                if (password.val() == "")
                    password.addClass(class_error);
                if (re_password.val() == "")
                    re_password.addClass(class_error);
                if (last_name.val() == "")
                    last_name.addClass(class_error);
                if (phone.val() == "")
                    phone.addClass(class_error);
                if (company.val() == "")
                    company.addClass(class_error);
                if (address.val() == "")
                    address.addClass(class_error);
                if (city.val() == "")
                    $('#city_dropdown .customSelect').addClass(class_error);
                if (industry.val() == "")
                    $('#industry_dropdown .customSelect').addClass(class_error);
                if (salutation.val() == "")
                    $('#salutation_dropdown .customSelect').addClass(class_error);

                alert("Please fill all mandatory fields");
                return false;
            } else if (password.val() != "" && parseInt(password.val().length) < 6) {
                alert('Password has to be at least 6 characters');
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
                    if (confirm('You are going to post 1 job')) {
                        $("#employer_post_job").submit();
                    } else {
                        return false;
                    }
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
            } else if (password.val() != "" && parseInt(password.val().length) < 6) {
                alert('Password has to be at least 6 characters');
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
            } else if (password.val() != "" && parseInt(password.val().length) < 6) {
                alert('Password has to be at least 6 characters');
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
            var last_name = $("#last_name");
            var phone = $("#phone");
            var nationality = $("#nationality");
            var address = $("#address");
            var city = $("#city");
            var zip_code = $("#zip_code");
            var province = $("#province");
            var country = $("#country");
            var expected_salary = $("#expected_salary");
            var current_title = $("#current_title");
            var current_company = $("#current_company");
            var work_month_start = $("#work_month_start");
            var work_year_start = $("#work_year_start");
            var work_month_end = $("#work_month_end");
            var work_year_end = $("#work_year_end");
            var current_city = $("#current_city");
            var current_industry = $("#current_industry");
            var industry_month_start = $("#industry_month_start");
            var industry_year_start = $("#industry_year_start");
            var industry_month_end = $("#industry_month_end");
            var industry_year_end = $("#industry_year_end");
            var education = $("#education");
            var graduation_year = $("#graduation_year");
            var major = $("#major");
            var education_city = $("#education_city");
            var current_work_present = $("#current_work_present");
            var industry_present = $("#industry_present");
            var education_other_city = $('#education_other_city');
            var current_city_other = $('#current_city_other');

            $("."+class_error).removeClass(class_error);
            
            if (first_name.val() == "" || email_address.val() == "" || !is_valid_email_address(email_address.val())
                    || password.val() == "" || re_password.val() == ""
                    || last_name.val() == "" || phone.val() == "" || nationality.val() == "" || address.val() == ""
                    || city.val() == "" || province.val() == "" || country.val() == "" || expected_salary.val() == ""
                    || current_title.val() == "" || current_company.val() == "" || work_month_start.val() == "" || work_year_start.val() == ""
                    || (current_work_present.is(':checked') == false && (work_month_end.val() == "" || work_year_end.val() == "")) 
                    || (current_city_other.val() == "" && current_city.val() == "") || current_industry.val() == ""
                    || industry_month_start.val() == "" || industry_year_start.val() == "" || (industry_present.is(':checked') == false && (industry_month_end.val() == "" || industry_year_end.val() == ""))
                    || education.val() == "" || graduation_year.val() == "" || major.val() == "" 
                    || (education_other_city.val() == "" && education_city.val() == "") || zip_code.val() == "" ) {
                if (first_name.val() == "") first_name.addClass(class_error);
                if (email_address.val() == "" || !is_valid_email_address(email_address.val())) email_address.addClass(class_error);
                if (password.val() == "") password.addClass(class_error);
                if (re_password.val() == "") re_password.addClass(class_error);
                if (first_name.val() == "") first_name.addClass(class_error);
                if (last_name.val() == "") last_name.addClass(class_error);
                if (phone.val() == "") phone.addClass(class_error);
                if (nationality.val() == "") nationality.addClass(class_error);
                if (address.val() == "") address.addClass(class_error);
                if (city.val() == "") city.addClass(class_error);
                if (zip_code.val() == "") zip_code.addClass(class_error);
                if (province.val() == "") province.addClass(class_error);
                if (country.val() == "") country.addClass(class_error);
                if (expected_salary.val() == "") $('.expected_salary').addClass(class_error);
                if (current_title.val() == "") current_title.addClass(class_error);
                if (current_company.val() == "") current_company.addClass(class_error);
                if (work_month_start.val() == "") $('.work_month_start').addClass(class_error);
                if (work_year_start.val() == "") $('.work_year_start').addClass(class_error);
                if (current_work_present.is(':checked') == false && work_month_end.val() == "") $('.work_month_end').addClass(class_error);
                if (current_work_present.is(':checked') == false && work_year_end.val() == "") $('.work_year_end').addClass(class_error);
                if (current_city.val() == "" && current_city_other.val() == "") {
                    if (current_city.val() == "") $('.current_city').addClass(class_error);
                    if (current_city_other.val() == "") current_city_other.addClass(class_error);
                }
                if (current_industry.val() == "") $('.current_industry').addClass(class_error);
                if (industry_month_start.val() == "") $('.industry_month_start').addClass(class_error);
                if (industry_year_start.val() == "") $('.industry_year_start').addClass(class_error);
                if (industry_present.is(':checked') == false && industry_month_end.val() == "") $('.industry_month_end').addClass(class_error);
                if (industry_present.is(':checked') == false && industry_year_end.val() == "") $('.industry_year_end').addClass(class_error);
                if (education.val() == "") education.addClass(class_error);
                if (graduation_year.val() == "") $('.graduation_year').addClass(class_error);
                if (major.val() == "") major.addClass(class_error);
                if (education_city.val() == "" && education_other_city.val() == "") {
                    if (education_city.val() == "") $('.education_city').addClass(class_error);
                    if (education_other_city.val() == "") education_other_city.addClass(class_error);
                }

                alert("Please fill all mandatory fields");
                return false;
            } else if (password.val() != "" && parseInt(password.val().length) < 6) {
                alert('Password has to be at least 6 characters');
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
            var jobselecteditems = [];
            $("#job_type_option").find("input:checked").each(function (i, ob) { 
                jobselecteditems.push($(ob).val());
            });  
            $("#job_type").val(jobselecteditems);
            
            var qualificationselecteditems = [];
            $("#qualification_option").find("input:checked").each(function (i, ob) { 
                qualificationselecteditems.push($(ob).val());
            });  
            $("#qualification").val(qualificationselecteditems);
            
            
            if ($(e.target).attr('id') == "job_submit_1") $("#main_search").val('1');
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
        
        /*CKEDITOR.instances['short_description'].on('contentDom', function() {
            this.document.on('click', function(event){
                var content = CKEDITOR.instances.short_description.document.getBody().getText();
                if (content == 'Company Background') {
                    CKEDITOR.instances.short_description.setData('');
                }
             });
        });
        var editor = CKEDITOR.instances['short_description'];
        if (editor) {
            editor.on('blur', function(event) {
                var content = CKEDITOR.instances.short_description.document.getBody().getText();
                if (content.length < 2) {
                    CKEDITOR.instances.short_description.setData('Company Background');
                }
            });
        } 
        
        CKEDITOR.instances['requirement'].on('contentDom', function() {
            this.document.on('click', function(event){
                var content = CKEDITOR.instances.requirement.document.getBody().getText();
                if (content == 'Requirement') {
                    CKEDITOR.instances.requirement.setData('');
                }
             });
        });
        var editor = CKEDITOR.instances['requirement'];
        if (editor) {
            editor.on('blur', function(event) {
                var content = CKEDITOR.instances.requirement.document.getBody().getText();
                if (content.length < 2) {
                    CKEDITOR.instances.requirement.setData('Requirement');
                }
            });
        } 
        
        CKEDITOR.instances['responsibility'].on('contentDom', function() {
            this.document.on('click', function(event){
                var content = CKEDITOR.instances.responsibility.document.getBody().getText();
                if (content == 'Responsibility') {
                    CKEDITOR.instances.responsibility.setData('');
                }
             });
        });
        var editor = CKEDITOR.instances['responsibility'];
        if (editor) {
            editor.on('blur', function(event) {
                var content = CKEDITOR.instances.responsibility.document.getBody().getText();
                if (content.length < 2) {
                    CKEDITOR.instances.responsibility.setData('Responsibility');
                }
            });
        } */
    })

    function is_valid_email_address(email_address) {
        var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
        return pattern.test(email_address);
    }

}(jQuery));