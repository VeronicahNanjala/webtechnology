<html>
<head>

</head>
<body>

<form name="myForm" action="/action_page_post.php" onsubmit="return validateForm()" method="post">
	<table>
		Name: <input type="text" name="fname"> <br>
		Email: <input type="text" name ="femail"><br>
		Message: <input type="text" name = "fmessage"><br>
		<input type="submit" value="Submit">
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