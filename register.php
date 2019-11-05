<?php
session_start();
?>

<html>

<head>
	<title>Register | Splash And Smash</title>
	<style>
		#grad1 {
			height: 100px;
			background-color: red;
			/* For browsers that do not support gradients */
			background-image: linear-gradient(red, yellow);
			/* Standard syntax (must be last) */
		}

		#help {
			background-color: red;
			width: 300px;
			height: 300px;
			display: none;
			position: fixed;
			top: 50%;
			left: 50%;
			margin: -150px 0 0 -150px;
		}

		.wow {
			visibility: visible !important;
		}

		body {
			background: url(images/timing-img.jpg) no-repeat center center fixed;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}

		
	</style>
	<!--for-mobile-apps-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="" />
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
	<link rel="manifest" href="manifest.json">
	<link rel="stylesheet" href="css/w3.css">
	<link rel="stylesheet" href="css/form.css">
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>

	<!--//for-mobile-apps-->

	<!-- Custom-Theme-Files -->
	<!-- cascading-CSS -->
	<link rel="stylesheet" href="css/cascader.css">
	<!-- JQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- cascading-Main -->
	<script src="js/cascader.js"> </script>
	<!-- Index-Page-Styling -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">

	<script type="text/javascript" src="js/tabulous.js"></script>
	<script type="text/javascript" src="js/flip.js"></script>

	<!-- Gallery effect CSS -->
	<link rel="stylesheet" href="css/swipebox.css">

	<!--JS for animate-->
	<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
	<link rel="icon" href="logo1.png" type="image/png" sizes="25x25">
	<script src="js/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>
	<!--//end-animate-->

	<!--startsmothscrolling-->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1200);
			});
		});
	</script>
	<!--endsmothscrolling-->

</head>

<body background="about.gif">
	<?php
// Always start this first
include("db.php");
if ( isset( $_SESSION['user_id'] ) ) {
	// Grab user data from the database using the user_id
	// Let them access the "logged in only" pages
	echo "<script type='text/javascript'> document.location = 'adminpanel.php'; </script>";
	header("Location: adminpanel.php");
} else {
	// Redirect them to the login page
	
} 
if ( isset( $_POST['signupbtn'] ) ) {
    if ( isset( $_POST['email'] ) && isset( $_POST['passwd'] )  && isset( $_POST['fname'] )  && isset( $_POST['lname'] )  && isset( $_POST['phoneno'] ) ) {
        // Getting submitted user data from database   
		$email=$_POST['email'];
		$sql = "SELECT email FROM user where email='$email'";
        $result = mysqli_query($link, $sql);
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
               echo "<script type='text/javascript'>alert('Email ID has already been taken! Please choose another Email ID!')</script>";
            }
        } 
        $passwd=md5($_POST['passwd']);
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $phoneno=$_POST['phoneno'];

        $sql = "INSERT INTO user (fname,lname,email,passwd,phoneno) VALUES ('".$fname."','".$lname."','".$email."','".$passwd."','".$phoneno."');";         
        if ($link->query($sql) === TRUE) {
            // echo "New record created successfully";
            header("location:login.php"); 
echo "<script type='text/javascript'> document.location = 'login.php'; </script>";
        } else {
            // echo "Error: " . $sql . "<br>" . $con->error;
        }
    }
}

$link->close();
?>
	<!-- Header Starts -->


	<script src="js/jquery.vide.min.js"></script>
	<div class="head-menu">
		<div class="header" data-vide-bg="video/park" id="home" style="width: 100%; height: 500px">
			<div class="menu-w3l">
				<nav class="navbar navbar-inverse">
					<div class="container">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand logo" href="#"><img src="./images/finlog.png" text="SMASH&SPLASH"
									alt="finlog image"></a>
						</div>

						<div class="collapse navbar-collapse " id="myNavbar">
							<ul class="nav navbar-nav navbar-right">
								<li class="active"><a href="index.php#home" class=" wow fadeInRight"
										data-wow-delay=".3s">Home</a></li>
								<li><a href="index.php#about" class=" wow fadeInRight" data-wow-delay="0.7s">About
										Us</a>
								</li>
								<li><a href="onlinebooking.php" class="wow fadeInRight" data-wow-delay="2.4s">Online
										Booking</a></li>
								<li><a href="index.php#timing" class=" wow fadeInRight"
										data-wow-delay="1.1s">Timings</a>
								</li>
								<li><a href="index.php#facilities" class=" wow fadeInRight"
										data-wow-delay="1.4s">Facilities</a></li>
								<li><a href="index.php#price" class=" wow fadeInRight" data-wow-delay="1.7s">Ticket
										Price</a></li>
								<li><a href="index.php#gallery" class=" wow fadeInRight"
										data-wow-delay="2.1s">Gallery</a>
								</li>
								<?php
									if ( isset( $_SESSION['user_id'] ) ) {
										echo "<li><a href='logout.php' class='wow fadeInRight' data-wow-delay='2.8s'>Logout</a>
										</li>";
									} else {
										echo "<li><a href='login.php' class='wow fadeInRight' data-wow-delay='2.8s'>Login</a>
										</li>";
									} 
								?>

							</ul>
						</div>
					</div>
				</nav>
				<div class="clearfix"> </div>
			</div> <!-- Menu Ends -->
		</div>
	</div> <!-- Header Ends -->

	<main>
	<div class="container">

		<div class="booking-padding">
			
			<div class="main">
				<form method="post">
				
					<div class="facts">
					<h3>Register</h3>
						<div class="divide">
							<div class="field1">
								<h5>First name</h5>
								<input type="text" value="" name="fname" placeholder="First name" pattern="[A-Za-z]{1,}"
									title="Enter a valid Name!" required="">
									<label class="error">Invalid First name field!</label>
									
							</div>
							<div class="field2">
								<h5>Last name</h5>
								<input type="text" value="" name="lname" placeholder="Last name" pattern="[A-Za-z]{1,}"
									title="Enter a valid Surame!" required="">
									<label class="error">Invalid Last name field!</label>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="divide">
							<div class="field">
								<h5>Phone Number</h5>
								<input type="text" value="" name="phoneno" placeholder="Phone Number" maxlength="10" 
									onKeyDown="phoneNoPreValidation()" name="phoneno" pattern="[0-9]{10}"
									title="Enter a valid Phone Number!" required="">
									<label class="error">Invalid Phone Number field!</label>
							</div>

							<div class="clearfix"> </div>
						</div>
						<div class="divide">
							<div class="field">
								<h5>E-mail</h5>
								<input type="email" value="" name="email" placeholder="E-mail" required="">
								<label class="error">Invalid E-mail field!</label>
							</div>

							<div class="clearfix"> </div>
						</div>
						<div class="divide">
							<div class="field">
								<h5>Password</h5>
								<input type="password" value="" name="passwd" placeholder="Password"
									pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
									title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters!"
									required="">
									<label class="error">Invalid Password field!</label>
							</div>
							<div class="clearfix"> </div>
						</div>

						<div class="date_btn">
							<input name="signupbtn" type="submit" id="btnSubmit" value="Register">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	</main>
	<!-- Contact Starts -->
	<div class="contact" id="contact">
		<div class="container">
			<div class="contact-padding">
				<h3> Contact Us</h3>
				<div>
					<div class="col-md-4 address">
						<h4>Address</h4>
						<address>
							Smash and Splash<br>
							Airport road,<br>
							Mumbai,<br>
							India<br>
							<span>Phone : +124567994</span>
						</address>
					</div>

					<div class="col-md-4 contact-grids map map-grid">
						<iframe
							src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d24539.92663142791!2d-86.16046302812671!3d39.75108691096141!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1463029882632"
							style="border:0"></iframe>
					</div>

					<div class="col-md-4 social-icons">
						<h4>Follow Us</h4>
						<ul class="social">
							<li><a href="https://www.facebook.com" class="facebook" title="Go to Our Facebook Page"></a>
							</li>
							<li><a href="https://www.twitter.com" class="twitter" title="Go to Our Twitter Account"></a>
							</li>
							<li><a href="https://www.gmail.com" class="googleplus"
									title="Go to Our Google Plus Account"></a></li>
							<li><a href="https://www.instagram.com" class="instagram"
									title="Go to Our Instagram Account"></a></li>
							<li><a href="https://www.youtube.com" class="youtube" title="Go to Our Youtube Channel"></a>
							</li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>

				<div class="footer">
					<p>© 2019 Smash and Splash. All Rights Reserved </a></p>
					<strong><a href="adminpanel.php" style="color:red">Admin Panel</a></strong>
				</div>

			</div>
		</div>
	</div> <!-- Contact Ends -->
	
	<script src="js/form.js"></script>
	<script>
		
		
	</script>
</body>

</html>