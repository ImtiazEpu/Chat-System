(function ($) {
//Chatroom Ajax part

$('.sendmessage').submit(function(){

	var  message 		= jQuery('.message').val();
	

	$.ajax({
		'url'  : 'chat.php',
		'type' : 'post',
		'data' :{
			'send' :'',
			'message' : message,
			

		},
		'success':function(output){
				jQuery('.blank').val('');
			}
	});

	return false;
	
	
});



//Login Ajax part

$('.userlogin').submit(function(){

	var  email 		= jQuery("input[name='email']").val();
	var  password   = jQuery("input[name='password']").val();

	$.ajax({
		'url'  : 'login.php',
		'type' : 'post',
		'data' :{
			'login'   :'',
			'email'   : email,
			'password': password

		},
		'success':function(output){
				jQuery('.blank').val('');
			}
	});
	
	
});


//Registration Ajax part

$('.userregistration').submit(function() {
	
	var  firstname = jQuery("input[name='firstname']").val();
	var  lastname  = jQuery("input[name='lastname']").val();
	var  email     = jQuery("input[name='email']").val();
	var  password  = jQuery("input[name='password']").val();


		$.ajax({
			'url' : 'register.php',
			'type': 'post',
			// dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
			'data': {
				'firstname': firstname,
				'lastname' : lastname,
				'email'    : email,
				'password' : password,
				'registration' : 'ache',
			},
			'success':function(output){
				jQuery('.success').html(output);
				jQuery('.blank').val('');
			}
		});
		
		

	return false;
});

}(jQuery))