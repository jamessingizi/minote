/**
 * custom javascript code for implementing extra functionality not available in template
 */

$(document).ready(function(){
	
	$('#login').click(function(e){
		
		e.preventDefault();
		
		var email = $('#email').val();
        var password = $('#password').val();
        
        $.ajax({


            url: 'api/login.php?email='+email+'&password='+password,
            beforeSend: function(){
                $('#login').html("logging in...")
            },
            success: function(data){
                $('#login').html("Login");

                var dataObj = jQuery.parseJSON(data);
                //console.log(dataObj);

                if(dataObj.message === 'success'){

                    window.location = 'dashboard.php';

                }else if(dataObj.message === 'invalid login'){

                   alert("Invalid login");
                   $('#password').val("");

                }

            }

        });
        
	});
	
	
	//create account
	$('#create_account').click(function(e){
		
		e.preventDefault();
		
		var createEmail = $('#create_email').val();
        var newPassword = $('#new_password').val();
        var repeatNewPassword = $('#repeat_new_password').val();
        
        //validate fields
        apos=createEmail.indexOf("@");
        dotpos=createEmail.lastIndexOf(".");
        
        if (createEmail==null||createEmail==""){
        	alert("Please enter a valid email");
        	return false;
        }
        
        if (newPassword==null||newPassword==""){
        	alert("Please enter a password");
        	return false;
        }
        	
        if (apos<1||dotpos-apos<2){
        	alert("Please enter a valid email");
        	return false;
        }
        
        if (newPassword!==repeatNewPassword){
        	alert("Your passwords do not match");
        	return false;
        }
        
        if (newPassword.length<6){
        	alert("Your password is too short, use at least six characters");
        	return false;
        }
        
        $.ajax({


            url: 'api/create_account.php?email='+createEmail+'&password='+newPassword,
            beforeSend: function(){
                $('#create_account').html("Creating your account...")
            },
            success: function(data){
                $('#create_account').html("Create account");

                var dataObj = jQuery.parseJSON(data);
                //console.log(dataObj);

                if(dataObj.message === 'success'){

                	alert("Account created successfully, login to access your account");
                	$('#new_password').val("");
                	$('#create_email').val("");
                	$('#repeat_new_password').val("");

                }else if(dataObj.message === 'error'){

                   alert("An application error occured, please try again later");
                   $('#new_password').val("");
                   $('#repeat_new_password').val("");

                }else if(dataObj.message === 'account already exists'){
                	 alert("Account already exists, you can go ahead and login");
                	 $('#new_password').val("");
                     $('#repeat_new_password').val("");
                     $('#create_email').val("");
                }

            }

        });
        
	});
});

