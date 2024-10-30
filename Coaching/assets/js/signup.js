
function validetion(){
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var password = document.getElementById("password").value;
    if(name== ""){
        alert("enter the name"); 
        return false;
    }
    if(email== ""){
        alert("enter the email");
        return false;
    }
    if(phone== ""){
        alert("enter the phone");
        return false;
    }
    if(password== ""){
        alert("enter the password");
        return false;
    }

}
function nameValidation(){
    var name = document.getElementById("name").value;


    if(name== ""){
        alert("enter the name"); 
        return false;
    }
    if(!isNaN(name)){
        alert("Name should be charecter");
        return false;
    }

}

function emailValidation(){
    var email = document.getElementById("email").value;
    var mail=/\S+@\S+\.\S+/;

            if(email== ""){
                alert("enter the email");
                return false;
            }
            if (!mail.test(email)) {
                alert("Envalid the email");
                return false;
            }

}

function phoneValidation(){
    var phone = document.getElementById("phone").value;
    if(phone== ""){
        alert("enter the phone");
        return false;
    }
    if(isNaN(phone)){
        alert("Phone no should be digit");
        return false;
    }
    if(phone.length!=11){
        alert("Phone no should be Eleven digit");
        return false;
        }

}

function passwordlValidation(){
    var passwordValidation = /^([a-zA-Z@#$%^&*(){}.,0-9?/\+-;:'"|!=_ ]){6,32}$/;
    var password = document.getElementById("password").value;
    if(password== ""){
        alert("enter the password");
        return false;
    }

    if(!passwordValidation.test(password)){
        alert("enter the Valide password");
        return false;
    }
}

function password2lValidation(){
    var password = document.getElementById("password").value;
    if(password2== ""){
        alert("enter the Conform password");
        return false;
    }

    if(!password2.match(/password/)){
        alert("Conform match the password");
        return false;
    }
}

function formValidation(){
    var name = document.getElementById("name").value;
    if(name==""){
        alert("error");
        return false;
    }

}
