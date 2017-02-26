<html>
<head>
<style>
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    float: right;
}
.td {
    color:white;
}
</style>
</head>

<!-- styles -->
<link rel="stylesheet" href="assets/css/fancybox/jquery.fancybox.css">
<link href="assets/css/bootstrap.css" rel="stylesheet" />
<link href="assets/css/bootstrap-theme.css" rel="stylesheet" />
<link rel="stylesheet" href="assets/css/slippry.css">
<link href="assets/css/style.css" rel="stylesheet" />
<link rel="stylesheet" href="assets/color/default.css">
<!-- ==========================================================================
    Details of theme employed for the front end of the project is as follows: 
    Theme Name: Groovin
    Theme URL: https://bootstrapmade.com/groovin-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
================================================================================ -->
<script src="assets/js/modernizr.custom.js"></script>

</head>

			<!-- Body Section begins here -->
<body>
<header>
<div id="navigation" class="navbar navbar-inverse navbar-fixed-top default" role="navigation">
  <div class="container">

    <!--  Header view - navigation bar
          Brand and toggle get grouped for better mobile display -->

    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="navbar-brand" href="index.html"> Ngoma </a>

    </div>

	<div class="navigation">
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"><nav>

      <ul class="nav navbar-nav navbar-right">
        <li class="current"><a href="#intro"> Home </a></li>
		<li><a href="#about"> About </a></li>
		<li><a href="#works"> Sign Up </a></li>
		<li><a href="Login.html"> Sign In</a></li>
		<li><a href="contactUs.php"> Contact Us </a></li>
      </ul></nav>
    </div> <!-- /.navbar-collapse -->
	</div>

  </div>
</div>

</header>

<body>
<!--A form for the contact us page-->
<div style = "margin-top:100px; "> 
<form name="myForm" style = "background-color: #4e3f3e;  width :50%; margin: auto" action="/action_page_post.php" onsubmit="return validateForm()" method="post">
	<table style = "padding-top: 15%; margin:auto; ">
	<h1 align="center" style= "color: white;"> Contact Us </h1>
	<tr>
	<td class = "td"> Name</td>
	<td> <input type="text" name="fname" size="42%"> <br><br></td>
	</tr>

	<tr>
	<td class = "td"> Email</td>
	<td><input type="text" name ="femail" size="42%"><br><br></td>
	</tr>
		<tr>
	<td class = "td">Message</td>
	<td><textarea type="text" name="fmessage" rows="6" cols="40"></textarea><br><br></td>
	</tr>

	<tr>
	<td></td>
	<td ><input type="submit" class = "button" value="Submit" ></td>
	</tr>

	</table>
</form>
</div>

<script>
//A function that validates the contents of the form
function validateForm() {
	//check if name is not empty
    var x = document.forms["myForm"]["fname"].value;
    if (x == "") {
        alert("Name must be filled out");
        document.forms[myform].elements[fname].focus();
        return false;
    }
    //check if email is not empty
     var y = document.forms["myForm"]["femail"].value;
    if (y == "") {
        alert("Email must be filled out");
        document.forms[myform].elements[femail].focus();
        return false;
        }

    // check for proper email format
    
    	validate_email(myform, femail);
    //check if message box is not empty
         var z = document.forms["myForm"]["fmessage"].value;
    if (z == "") {
        alert("Tell us your message");
        document.forms[myform].elements[fmessage].focus();
        return false;
    }


}

function validate_email(myform, femail){
	var reg = /^([A-Za-z0-9_\-\.]){1,}$\@([A-Za-z0-9_\-\.]){1,}\.([A-Za-a]{2,4})$/;
	var email = document.forms[myform].elements[femail].value;
	if (reg.test(email)==false){
		alert("Invalid email address. Please enter a valid one.")
		document.forms[myform].elements[femail].focus();
		return false;
	}
}
</script>


<footer style = "margin-top: 10px">
<div class="verybottom">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="aligncenter">
                <ul class="social-network social-circle">
                    <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                    <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                </ul>	
				</div>				
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="aligncenter">
					<p>
						 &copy; Ngoma Music - All right reserved
					</p>
                    <div class="credits">
                        <!-- 
                            All the links in the footer should remain intact. 
                            You can delete the links only if you purchased the pro version.
                            Licensing information: https://bootstrapmade.com/license/
                            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Groovin
                        -->
                        <a href="https://bootstrapmade.com/">Credit:Free Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    </div>
				</div>
			</div>
		</div>
	</div>
</div>
</footer>

</body>

</html>