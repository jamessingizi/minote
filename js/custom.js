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
	
	//app config and operations code
	
	//detect if text in the note text area has been changed
	$('#note-display-area').keydown(function(){
		console.log("key pressed");
		alert("Key Pressed");
	});
	
	//note listing click detect
	$('.note-listing').click(function(e){
		
		e.preventDefault();
		var noteId = $(this).attr('data-note-id');
		
		$('#btn-save').addClass("hide");
		
		$.ajax({

            url: 'api/getnote.php?note_id='+noteId,
            beforeSend: function(){
               //show that app is fetching data in background
            },
            success: function(data){
               //populate textarea and enable button

                var dataObj = jQuery.parseJSON(data);
                console.log(dataObj);

                if(dataObj.message === 'success'){
                	
                	$('#note-display-area').remove();
                	var contentArea  = document.createElement("textarea");
                	contentArea.setAttribute('id','note-display-area');
                	contentArea.setAttribute('disabled','true');
                	contentArea.setAttribute('data-note-display-id','');
                	
                	$('#note-display-area').css("border-color","#fff");
                	
                	$('#note-display-wrapper').append(contentArea);
                	$('#note-display-area').html(dataObj.note.content);
                	$('#btn-edit').removeAttr("disabled");
                	$('#btn-delete').removeAttr("disabled");
                	
                	$('#note-display-area').attr("data-note-display-id",noteId);
                	
                	$('#note-meta').text(dataObj.note.notebook+" note book");

                }else if(dataObj.message === 'error'){
                	//show error message

                }

            }

        });
	});
	
	//edit note
	$('#btn-edit').click(function(e){
		
		e.preventDefault();
		$('#note-display-area').css("border-color","#3598db");
    	$('#note-display-area').removeAttr("disabled");
    	$('#btn-save').removeClass("hide");
    	
    	// set save button to visible $('#btn-delete').removeAttr("disabled");
    
	});
	
$('#btn-save').click(function(e){
		
		e.preventDefault();
		$('#note-display-area').css("border-color","#fff");
    	$('#note-display-area').attr("disabled","true");
    	$('#btn-save').addClass("hide");
    	
    	// set save button to visible $('#btn-delete').removeAttr("disabled");
    
	});
	
	//delete note
	
	$('#btn-delete').click(function(e){
		
		e.preventDefault();
		var noteId = $('#note-display-area').attr("data-note-display-id");
		var r = confirm("Are you sure you want to delete this note");
		if(r===true){
			
			$.ajax({

	            url: 'api/deletenote.php?note_id='+noteId,
	            beforeSend: function(){
	               //show that app is fetching data in background
	            },
	            success: function(data){

	                var dataObj = jQuery.parseJSON(data);
	                console.log(dataObj);

	                if(dataObj.message === 'success'){
	                	//refresh notes listing and reflect changes
	                	$('#note-display-area').css("border-color","#fff");
	                	$('#note-display-area').text("");
	                	$('#note-display-area').attr("disabled");
	                	$('#note-meta').text("");
	                	$('#btn-edit').attr("disabled");
	                	$('#btn-delete').attr("disabled");
	                    

	                }else if(dataObj.message === 'error'){
	                	//show error message
	                	alert("Note could not be deleted, try again!!!");

	                }

	            }

	        });
			
		}
    	
    	// set save button to visible $('#btn-delete').removeAttr("disabled");
    
	});
	
	
	
});

