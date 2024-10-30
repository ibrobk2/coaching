
function myWatch(){

    var dateTime = new Date();
    var hour     = dateTime.getHours();
    var minute   = dateTime.getMinutes();
    var second   = dateTime.getSeconds();

    var result = hour +" : "+ minute +" : " + second;
    document.getElementById('watch').innerHTML = result;

}

setInterval(myWatch,1000);

function my_calculator (operator)
{


function addition(){
    return first_number + second_number;
}

function subtraction(){
    return first_number - second_number;
}

function multiplication(){
    return first_number * second_number;
}

function division(){
    return first_number / second_number;
}
function modulus(){
    return first_number % second_number;
}

var first_number =Number(document.getElementById('first_number').value);
var second_number = Number(document.getElementById('second_number').value);

var result = 0;

switch (operator){
    case '+' :
        result = addition(first_number,second_number);
        break;
    case '-' :
        result = subtraction(first_number,second_number);
        break;  
    case '*' :
        result = multiplication(first_number,second_number);
        break;
    case '/' :
        result = division(first_number,second_number);
        break;
    case '%' :
        result = modulus(first_number,second_number);
        break;
        
}

document.getElementById('result').value=result;

}    

var reset_btn = document.getElementById('reset_btn');

reset_btn.onclick = function (){
    document.getElementById('first_number').value = '';
    document.getElementById('second_number').value = '';
    document.getElementById('result').value = '';
}
