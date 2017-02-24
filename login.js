/**
This class validates the password counts and sets a temporary password
*/
//A variable that counts the number of times someone tried a password
passwordAttempt --5;
function validate(){
var username = document.getElementById("uname").value;
var password = document.getElementById("psw").value;

if ( username == "ngoma" && password == "music123"){
alert ("Login successfully");
//window.location = "x.html"; // Redirecting to other page.
return false;
}
else{

passwordAttempt --;// Decrementing by one.
alert("You have left "+passwordAttempt+" attempt;");
// Disabling fields after 3 attempts.
if( passwordAttempt == 0){
	//alert("Hello");
document.getElementById("username").disabled = true;
document.getElementById("password").disabled = true;
document.getElementById("submit").disabled = true;
return false;
}
}
}