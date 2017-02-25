<html>
<head>

</head>
<body>

<form name="myForm" action="/action_page_post.php" onsubmit="return validateForm()" method="post">
	<table style = "padding-top: 15%; margin:auto;">
	<tr>
	<td> First name</td>
	<td> <input type="text" name="fname" size="52%"> <br><br></td>
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
	<td style="padding-left: 35%"><input type="submit" value="Submit" ></td>
	</tr>

	</table>
</form>

<script>
function validateForm() {
    var x = document.forms["myForm"]["fname"].value;
    if (x == "") {
        alert("First name must be filled out");
        return false;
    }
     var y = document.forms["myForm"]["fsurname"].value;
    if (y == "") {
        alert("Email must be filled out");
        return false;
        }
         var z = document.forms["myForm"]["femail"].value;
    if (z == "") {
        alert("Tell us your message");
        return false;
    }
     var a = document.forms["myForm"]["fusername"].value;
     if (a == "") {
        alert("Please enter a username");
        return false;
    }
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
    if(c!=b){
    	alert("Password mismatch, please try again");
    	return false;
    }

}


</script>

</body>

</html>