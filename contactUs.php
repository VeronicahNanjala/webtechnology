<html>
<head>

</head>
<body>

<form name="myForm" action="/action_page_post.php" onsubmit="return validateForm()" method="post">
	<table style = "padding-top: 15%; margin:auto;">
	<tr>
	<td> Name</td>
	<td> <input type="text" name="fname" size="52%"> <br></td>
	</tr>

	<tr>
	<td> Email</td>
	<td><input type="text" name ="femail" size="52%"><br></td>
	</tr>
		<tr>
	<td>Message</td>
	<td><textarea type="text" name="fmessage" rows="5" cols="40"></textarea><br><br></td>
	</tr>

	<tr>
	<td></td>
	<td style="padding-left: 69.5%"><input type="submit" value="Submit" ></td>
	</tr>

	</table>
</form>

<script>
function validateForm() {
    var x = document.forms["myForm"]["fname"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
     var y = document.forms["myForm"]["femail"].value;
    if (y == "") {
        alert("Email must be filled out");
        return false;
        }
         var z = document.forms["myForm"]["fmessage"].value;
    if (z == "") {
        alert("Tell us your message");
        return false;
    }

}


</script>

</body>

</html>