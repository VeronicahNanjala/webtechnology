<html>
<head>

</head>
<body>
<!--A form for the listener to sign up-->
<form name="myForm" style = "background-color: #4e3f3e;  width :50% ;margin: auto; color: white;"  action="/action_page_post.php" onsubmit="return validateForm()" method="post">
	<table style = "padding-top: 15%; margin:auto; color: white;">
<h1 align= "center">Sign Up</h1>
	<tr>
	<td> First name</td>
	<td> <input type="text"  name="fname" size="52%"> <br><br></td>
	</tr>

	<tr>
	<td> Surname</td>
	<td> <input type="text" name="fsurname" size="52%"> <br><br></td>
	</tr>


	<tr>
	<td> Email</td>
	<td><input type="text" name ="femail" size="52%"><br><br></td>
	</tr>

	<tr>
	<td> Username</td>
	<td> <input type="text" name="fusername" size="52%"> <br><br></td>
	</tr>

	<tr>
	<td>Password</td>
	<td><input type="password" name="fpassword" size="52%"><br><br></td>
	</tr>

	<tr>
	<td>Confirm Password</td>
	<td><input type="password" name="fcpassword" size="52%"><br><br></td>
	</tr>

	<tr>
	<td></td>
	<td style="padding-left: 35%"><input type="submit" value="Sign up" ></td>
	</tr>

	</table>
</form>

<!--beginning of javascript code-->

<script>
//A function that validates contents entered by the user
function validateForm() {
	//check if name is not empty
    var x = document.forms["myForm"]["fname"].value;
    if (x == "") {
        alert("Please enter your first name");
        return false;
    }
   // check if surname is not empty
     var y = document.forms["myForm"]["fsurname"].value;
    if (y == "") {
        alert("Please enter your surname");
        return false;
        }
    //check if the email is not empty
         var z = document.forms["myForm"]["femail"].value;
    if (z == "") {
        alert("Please enter your email adress");
        return false;
    }
    //check if username is not empty
     var a = document.forms["myForm"]["fusername"].value;
     if (a == "") {
        alert("Please enter a username");
        return false;
    }
    //check if password is not empty
     var b = document.forms["myForm"]["fpassword"].value;
     if (b == "") {
        alert("Please nter password");
        return false;
    }
     var c = document.forms["myForm"]["fcpassword"].value;
     if (c == "") {
        alert("Confirm password");
        return false;
    }
    //check if the passwords are the same
    if(c!=b){
    	alert("Password mismatch, please try again");
    	return false;
    }

}


</script>

</body>

</html>