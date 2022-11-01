<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Aleo" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	<title>Miracle&nbsp; Makers</title>
	<!----Linking google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

	<!----font-awsome start-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!----font-awsome ends-->

		<!----css file link-->
	
	<link rel="stylesheet" type="text/css" href="css/login.css">

	   <!----favicon setting-->
	<link rel="shortcut icon" type="text/css" href="img/icon-5359553_1280.png">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!-- Google Client id to integrate google signin-->

	<meta name="google-signin-client_id" content="808976312783-k901nr0n50did222qa275k0umvn4rpi1.apps.googleusercontent.com">
	

	<!-- Google JavaScript file to integrate google signin-->
	<script src="https://apis.google.com/js/platform.js" async defer></script>

	<!-- Google custom JavaScript file to integrate google signin-->
	<script type="text/javascript" src="js/google_signin.js"></script>


	<!----------email notification-------->

<script type="text/css">
	
</script>
<style>
	.slider
{
	width: 100%;
	height: 100vh;
	background-image: url(..//img/);
	background-size: cover;
	background-position: center;
	position: absolute;	
}

.navbar
{
	padding: 22px 0px;
	 
	background-color:  deepskyblue !important;
	
	border-bottom: none !important;
	transition: all 0.5s ease-in-out; 
	

}
ul li a
{
	color: white !important;
	font-weight: bold;
	font-size: 13px;
	text-transform: uppercase;
	letter-spacing: 1px;
	transition: all 0.5s ease-in;
}

ul li a:hover
{
	color: deepskyblue !important;
	font-size: 14px ;
}
.navbar-toggle
{
	border:1px solid white !important;
	transition: all 0.5s ease-in;
}
.navbar-toggle:hover
{
	background-color:deepskyblue !important;
}

#our-location
{
	border: 1px solid white ;
	border-radius: 45px;
	padding: 12px 12px 12px 12px;
	
	background: deepskyblue !important;

}
#our-location:hover
{
	background-color: white !important;
	
}

.navbar-inverse
{
	background-color: rgb(17, 30, 45,0.5) !important;
}


</style>
</head>
<body>
			<!---Navigation Starts	----->

	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container" >
			<div class="navbar-header" >
				<!------Responsive Button---->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navi">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>


				</button>

				<h1 style="color: white;margin-top: 10px;" id="myhead">Miracle&nbsp; Makers</h1>
			</div>
			<div class="collapse navbar-collapse" id="navi">
                 <!------Navigation menus starts---->
				<ul class="nav navbar-nav navbar-right">
					<li> <a href="">Home</a></li>
					<li> <a href="">Our Service</a></li>
					<li> <a href="">Works</a></li>
					<li> <a href="">Team</a></li>
					<li> <a href="">About</a></li>
					<li> <a href="">Carrier</a></li>
					<li> <a href="" id="our-location" class="btn-success" data-target="#mymodal" data-toggle="modal">Login/Signup</a></li>
				</ul>
	                 <!------Navigation menus ends---->
			</div>
		</div>
	</nav>
			<!---Navigation Ends	----->
		
			<!---Slider Section starts	------->
			<section class="slider text-center" id="slider">
			
				<div class="modal-dialog ">
					<div class="modal-content">
						<h3 id="login-heading">Login</h3>
						
					<div class="modal-body" >
						<div class="left-box">
						<form method="POST" action="validation.php" onsubmit="return validation()">
							<div class="form-group">
								<label><i class="fa fa-user fa-2x">&nbsp;&nbsp;</i>Username :</label>
								<input type="text" autocomplete="off" name="name" class="form-control" id="username" onkeypress="clear()">
							

								<label><i class="fa fa-lock fa-2x">&nbsp;&nbsp;</i>Password :</label>
								<input type="password" autocomplete="off" name="password" class="form-control" id="password">

								<span id="perror"><?php 
								if(isset($_SESSION['error']))
								{
									echo "wrong username or password";
								} 
								else{ echo " ";} 
								?>
									

								</span>
								<button id="btn-login" type="submit">Login</button>
								
							</div>
							<div class="register">
								<h2>Don't have an account?&nbsp<span id="create-account"><a href="signup.html"><br> <b>Create Account</b> </span></a> </h2>
							</div>
							
						</form>
					</div>
					<div class="right-box">
						<span class="signinwith">Sign in With <br> Social Networks</span>

						<button class="social facebook">Log in with Facebook</button>
						<button class="social twitter">Log in with twitter</button>
						
					</div>
					
					</div>
					
						
				</div>
			</div>
			</section>
			

			<!---Slider Section ends------->

			<!---confirm password validation Start------->

<script type="text/javascript">
	
function validation() {
	var username=document.getElementById('username').value;
	var password=document.getElementById('password').value;

	if ((username=="") ||( password==""))
	 {
	 	document.getElementById('perror').innerHTML="please fill the details";
	 	return false;
	 }
}


function clear() {
	document.getElementById('perror').innerHTML="ksdfisdhfg";
}

</script>
         <!---confirm password validation end------->

       

<script src="js/jquery.ripples-min.js" type="text/javascript"></script>
<script src="js/typed.min.js" type="text/javascript"></script>

</body>
</html>