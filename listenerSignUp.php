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
        <li><a href="#contact"> Contact Us </a></li>
      </ul></nav>
    </div> <!-- /.navbar-collapse -->
    </div>

  </div>
</div>

</header>

<body>
<!--A form for the listener to sign up-->
<div style = "margin-top:100px">
<form name="myForm" style = "background-color: #4e3f3e;  width :50% ;margin: auto; color: white;"  action="/action_page_post.php" onsubmit="return validateForm()" method="post">
	<table style = "padding-top: 15%; margin:auto;">
<h1 align= "center" style= "color: white;">Sign Up</h1>
	<tr>
	<td class = "td" > First name</td>
	<td> <input type="text"  name="fname" size="52%"> <br><br></td>
	</tr>

	<tr>
	<td class = "td"> Surname</td>
	<td> <input type="text" name="fsurname" size="52%"> <br><br></td>
	</tr>


	<tr>
	<td class = "td"> Email</td>
	<td><input type="text" name ="femail" size="52%"><br><br></td>
	</tr>

	<tr>
	<td class = "td"> Username</td>
	<td> <input type="text" name="fusername" size="52%"> <br><br></td>
	</tr>

	<tr>
	<td class = "td">Password</td>
	<td><input type="password" name="fpassword" size="52%"><br><br></td>
	</tr>

	<tr>
	<td class = "td">Confirm Password</td>
	<td><input type="password" name="fcpassword" size="52%"><br><br></td>
	</tr>

	<tr>
	<td></td>
	<td ><input type="submit" class= "button" value="Sign up"   ></td>
	</tr>

	</table>
</form >

</div >
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


<!--beginning of javascript code-->
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