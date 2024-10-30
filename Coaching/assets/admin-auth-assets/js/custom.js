var emailError 		= document.getElementById('email-error');
var PassError 		= document.getElementById('Pass-error');


/**Start Email Validation */

function validateEmail(){
	var email = document.getElementById('email').value;
	if(email.length == 0){
		emailError.innerHTML = 'Email requred';
		return false;
	}
	if(!email.match(/\S+@\S+\.\S+/)){
		emailError.innerHTML = 'Write Valid Email';
		return false;
	}
	else{
		emailError.innerHTML = '<i class="fa fa-check-circle" aria-hidden="true"></i>';
	return true;
	}
}
/**End Email Validation */

/**Start Password Validation */
function validatePass(){
	var password = document.getElementById('password').value;
	if(password.length == 0){
		PassError.innerHTML = 'Password requred';
		return false;
	}
	if(!password.match(/^([a-zA-Z@#$%^&*(){}.,0-9?/\+-;:'"|!=_ ]){6,32}$/)){
		PassError.innerHTML = 'Write Valid password';
		return false;
	}
	else{
		PassError.innerHTML = '<i class="fa fa-check-circle" aria-hidden="true"></i>';
	return true;
	}
}
/**End Password Validation */
const  password = document.getElementById('password').value;



function validation(){
	if(!validateEmail() || !validatePass()){
		
	}
}