$(document).ready(function(){
    $("#form").validate({
        rules:{
            first_name : "required",
            last_name : "required",
            email : {
                required : true,
                email : true
            },
            pswd1 : {
                required : true,
                minlength : 8,
                pswdcheck : true
            },
            pswd2 : {
                required : true,
                equalTo : "#pswd1" 
            }
        },
        messages:{
            first_name: "Please, Enter First Name",
            last_name: "Please, Enter Last Name",
            email : {
                required : "Please, Enter Email Address",
                email : "Please, Enter Valid Email Address",
            },
            pswd1 : {
                required : "Please, Enter Password",
                minlength : "Password must conatain at least 8 characters",
                pswdcheck :  "Password must contain at least 1 digit, 1 lower case, 1 upper case, 1 special characters"
            },
            pswd2 : {
                required : "Please, Re-enter Password",
                equalTo :  "Password does not match",
            }
        }
    });

    $.validator.addMethod("pswdcheck", function(value) {
        // return /^[A-Za-z0-9\d!\-@._*]*$/.test(value) && /[a-z]/.test(value) && /\d/.test(value);
        return  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,}$/.test(value);

     });
});