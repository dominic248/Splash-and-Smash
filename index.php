<!DOCTYPE html>
<html>

<head>
	<title>Splash and Smash</title>
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
	</style>
	<!--for-mobile-apps-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="" />
	<link rel="icon" href="images/logo1.png" type="image/png" sizes="25x25">
	<link rel="manifest" href="manifest.json">
	<link rel="stylesheet" href="css/w3.css">
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
								<li class="active"><a href="#home" class="scroll wow fadeInRight"
										data-wow-delay=".3s">Home</a></li>
								<li><a href="#about" class="scroll wow fadeInRight" data-wow-delay="0.7s">About Us</a>
								</li>
								<li><a href="#booking" class="scroll wow fadeInRight" data-wow-delay="2.4s">Online
										Booking</a></li>
								<li><a href="#timing" class="scroll wow fadeInRight" data-wow-delay="1.1s">Timings</a>
								</li>
								<li><a href="#facilities" class="scroll wow fadeInRight"
										data-wow-delay="1.4s">Facilities</a></li>
								<li><a href="#price" class="scroll wow fadeInRight" data-wow-delay="1.7s">Ticket
										Price</a></li>
								<li><a href="#gallery" class="scroll wow fadeInRight" data-wow-delay="2.1s">Gallery</a>
								</li>
								<li><a href="#contact" class="scroll wow fadeInRight" data-wow-delay="2.8s">Contact</a>
								</li>
								
							</ul>
						</div>
					</div>
				</nav>
				<div class="clearfix"> </div>
			</div> <!-- Menu Ends -->
		</div>
	</div> <!-- Header Ends -->

	<!--  About Starts -->
	<div class="about" id="about">
		<div class="container">
			<div class="about-padding-w3ls">
				<h1> About Smash and Splash </h1>
				<div class="col-md-6 about-img">
					<div class="w3l-img1">
						<img src="./images/about-img2.jpg" alt="logo">
						<div class="w3l-img2">
							<img src="./images/2.jpg" alt="logo">
						</div>
						<div class="w3l-img3">
							<img src="./images/1.jpg" alt="logo">
						</div>
					</div>
				</div>

				<div class="col-md-6 about-text">
					<div class="about-text-padding-agile">


						<h4> Enjoy Here </h4>
						<p>
							India's first and only family holiday destination from Mumbai and Pune.
							SMASH AND SPLASH is the perfect weekend getaway which includes an International Standard
							theme park, a water park and a premium hotel.
							This escapism is what separates SMASH AND SPLASH from all other parks in India, making it at
							par with the best parks around the world.
						</p>
						<br>
						<button type="button" class="w3-button w3-black" onclick="loadXMLDoc()">Get Ride
							Timings</button>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div><!--  About Ends -->
	<center>
		<table id="demo" class="w3-table-all w3-hoverable" style="display:none">
			<?php
				// Load XML file
				$xml = new DOMDocument;
				$xml->load('timings.xml');

				// Load XSL file
				$xsl = new DOMDocument;
				$xsl->load('timings.xsl');

				// Configure the transformer
				$proc = new XSLTProcessor;

				// Attach the xsl rules
				$proc->importStyleSheet($xsl);

				echo $proc->transformToXML($xml);
			?>
		</table>
	</center>
	
	<div class="booking" id="booking">
		<div class="container">
			<div class="booking-padding">
				<h3>Online Ticket Booking </h3>
				<div class="main">
					<div class="facts">
						<div>
							<div class="reservation-name">
								<h5>Visitor Name </h5>
								<input type="text" id="vName" value="" onfocus="this.value = '';"
									onblur="if (this.value == '') {this.value = 'Name';}" required="">
							</div>
							<div class="date-pike">
								<h5>Date of Visit </h5>
								<input class="date" id="datepicker" type="text" value="" onfocus="this.value = '';"
									onblur="if (this.value == '') {this.value = 'dd/mm/yyyy';}" required="">
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="reservation">
							<div class="groups">
								<div class="grid_4 columns">
									<h5>Total Tickets</h5>
									<select class="custom-select" id="tickets">
										<option selected="selected">0</option>
										<?php
											for($i = 1; $i<=40; $i++) {
												echo "<option>$i</option>";    
											}
										?>
									</select>
								</div>
								<div class="grid_5 columns">
									<h5>Adults</h5>
									<select class="custom-select" id="adult">
										<option selected="selected">0</option>
										<?php
											for($i = 1; $i<=20; $i++) {
												echo "<option>$i</option>";    
											}
										?>
									</select>
								</div>
								<div class="grid_6 columns">
									<h5>Child</h5>
									<select class="custom-select" id="child">
										<option selected="selected">0</option>
										<?php
											for($i = 1; $i<=20; $i++) {
												echo "<option>$i</option>";    
											}
										?>
									</select>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="date_btn">
							<input type="submit" value="Book" id="btnSubmit" onclick="book();">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script>
		function clearBookForm(){
			$("#vName").val("");
			$("#datepicker").val(null);
			$("#tickets").val(null);
			$("#adult").val(null);
			$("#child").val(null);
		}
		function book() {
			if ($("#btnSubmit").val() == "Book") {
				$.ajax({
					type: "POST",
					url: "saveBookings.php",
					data: {
						vName: $("#vName").val(),
						datepicker: $("#datepicker").val(),
						tickets: $("#tickets").val(),
						adult: $("#adult").val(),
						child: $("#child").val()
					},
					success: function (response) {
						console.log(response);
						if ($.trim(response) == "inserted") {
							alert("Booked Successfully!");
							clearBookForm();
						} else if ($.trim(response) == "updated") {
							alert("Ticket Booking Updated Successfully!");
							clearBookForm();
						} else if ($.trim(response) == "deleted") {
							alert("Ticket Booking Cancelled Successfully!");
							clearBookForm();
						}else if ($.trim(response) == "incorrect") {
							alert("Invalid Ticket Entry!");
						} else {
							alert("Error! Something Went Wrong...");
						}
					}
				});
			}
		}
	</script>


	<script>
		function loadXMLDoc() {
			if(document.getElementById("demo").style.display=="none"){
				document.getElementById("demo").style.display = "table";
			}else{
				document.getElementById("demo").style.display = "none";
			}
		}
		
	</script>
	<!-- Ticket Booking Ends -->
	<!--  Visiting-time Starts -->
	<div class="visiting-time" id="timing">
		<div class="container">
			<div class="visiting-padding">

				<div class="timings">
					<h2> Opening Timings</h2>
					<h5> <span> Monday - Friday </span> : 11.00 am - 08.00 pm </h5>
					<h5> <span> Saturday - Sunday </span> : 10.00 am - 09.00 pm </h5>
					<h5> <span>Holidays </span> : 10.00 am - 10.00 pm </h5>
				</div>
			</div>
		</div>
	</div><!--  Visiting-time Ends -->

	<!--  info Starts -->
	<div class="info" id="facilities">
		<div class="container">
			<div class="info-padding-agileits">
				<h2> Facilities </h2>

				<div class="up-info">
					<div class="col-xs-3 col-sm-3 col-md-6 col-lg-6 w3-info info1">
						<div class="icon hovereffect">
							<i class="icon1"> </i>
						</div>
						<h5>Food Court</h5>
						<p>A food court is generally an indoor plaza or common area within a facility that is contiguous
							with the counters of multiple food vendors and provides a common area for self-serve dinner.
						</p>
					</div>

					<div class="col-xs-3 col-sm-3 col-md-6 col-lg-6 w3-info info2">
						<div class="icon hovereffect">
							<i class="icon2"> </i>
						</div>
						<h5>Spa Area</h5>
						<p>A spa is a location where mineral-rich spring water (and sometimes seawater) is used to give
							medicinal baths. Spa towns or spa resorts (including hot springs resorts) typically offer
							various health treatments, which are also known as balneotherapy.</p>
					</div>
					<div class="clearfix"> </div>
				</div>

				<div class="down-info">
					<div class="col-xs-3 col-sm-3 col-md-6 col-lg-6 w3-info info3">
						<div class="icon hovereffect">
							<i class="icon3"> </i>
						</div>
						<h5>Dormitory</h5>
						<p>A dormitory is a building primarily providing sleeping and residential quarters for large
							numbers of people such as boarding school, high school, college or university students. In
							some countries, it can also refer to a room containing several beds accommodating people.
						</p>
					</div>

					<div class="col-xs-3 col-sm-3 col-md-6 col-lg-6 w3-info info4">
						<div class="icon hovereffect">
							<i class="icon4"> </i>
						</div>
						<h5>Lockers</h5>
						<p>A locker is a small compartment that is used to store things such as books, coats, etc.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div><!--  info Ends -->


	<!-- Tickets Starts here -->
	<div class="tickets" id="price">
		<div class="container">
			<div class="tickets-padding-w3agile">
				<h3> Ticket Price </h3>
				<!-- Tickets Tabs Starts -->
				<div id="wrapper">
					<div id="tabs4">
						<ul>
							<li><a href="#tabs-1" title="">Basic</a></li>
							<li><a href="#tabs-2" title="">Children</a></li>
							<li><a href="#tabs-3" title="">Special</a></li>
						</ul>

						<div id="tabs_container">

							<div id="tabs-1">
								<!-- Tabs container Starts -->
								<section class="grid1a">
									<section class="para-a">
										<h4>One Person</h4>
										<h5> <span>$</span>65</h5>
										<p>Fun as You LIke</p>
										<p>Only place in the World</p>
									</section>
								</section>

								<section class="grid1b">
									<h3>Basic Ticket</h3>
									<section class="para">
										<p> Entry Pass </p>
										<p> All Roller Coasters </p>
										<p> Ferris Wheel </p>
										<p> Pendulum Rides Basic </p>
										<p> Carousel - All Rides </p>
										<p> Bumper Cars </p>
										<p> skyRide </p>
										<p> water slide </p>
									</section>
								</section>
							</div>

							<div id="tabs-2">
								<section class="grid2a">
									<section class="para-a">
										<h4>One Child</h4>
										<h5> <span>$</span>40</h5>
										<p>Fun as You LIke</p>
										<p>Only place in the World</p>
									</section>
								</section>

								<section class="grid2b">
									<h3>Children Ticket</h3>
									<section class="para">
										<p> Entry Pass </p>
										<p> All Roller Coasters </p>
										<p> Ferris Wheel </p>
										<p> Pendulum Rides Basic </p>
										<p> Carousel </p>
										<p> Bumper Cars </p>
										<p> skyRide </p>
										<p> water slide </p>
									</section>
								</section>
							</div>

							<div id="tabs-3">
								<section class="grid3a">
									<section class="para-a">
										<h4>Four Persons</h4>
										<h5> <span>$</span>199</h5>
										<p>Fun as You LIke</p>
										<p>Only place in the World</p>
									</section>
								</section>

								<section class="grid3b">
									<h3>Special Ticket</h3>
									<section class="para">
										<p> Entry Pass </p>
										<p> All Roller Coasters </p>
										<p> Ferris Wheel </p>
										<p> Pendulum Rides Basic </p>
										<p> Carousel - All Rides </p>
										<p> Bumper Cars </p>
										<p> skyRide - One Way </p>
										<p> water slide - only Two time </p>
									</section>
								</section>
							</div>

						</div>
						<!--End tabs container-->
					</div>
					<!--End tabs-->
				</div>
				<!-- Ticket Tab Ends -->
			</div>
		</div>
	</div> <!-- Tickets Ends -->

	<!-- Gallery start -->
	<div id="gallery" class="gallery">
		<div class="container">
			<div class="gallery-padding">
				<div class="gallery-w3l-title">
					<h3>Photo Gallery</h3>
					<p>Find the mesmering memories here. </p>
				</div>

				<div class="gallery_gds">
					<ul class="simplefilter">
						<li class="active" data-filter="all">All</li>
						<li data-filter="1">Water-land</li>
						<li data-filter="2">Rides</li>
						<li data-filter="3">Games</li>
					</ul>

					<div class="filtr-container">
						<div class="col-md-4 filtr-item g-width" data-category="1, 4" data-sort="01">
							<div class="hover ehover14">
								<a href="images/g10.jpg" class="swipebox" title="">
									<img src="images/g10.jpg" alt="" class="img-responsive" />
									<div class="overlay">
										<h4>Portfolio</h4>
										<div class="info nullbutton button" data-toggle="modal" data-target="#modal14">
											Show More</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-md-4 filtr-item g-width" data-category="2, 3" data-sort="02">
							<div class="hover ehover14">
								<a href="images/g11.jpg" class="swipebox" title="">
									<img src="images/g11.jpg" alt="" class="img-responsive" />
									<div class="overlay">
										<h4>Portfolio</h4>
										<div class="info nullbutton button" data-toggle="modal" data-target="#modal14">
											Show More</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-md-4 filtr-item g-width" data-category="1, 4" data-sort="03">
							<div class="hover ehover14">
								<a href="images/g12.jpg" class="swipebox" title="">
									<img src="images/g12.jpg" alt="" class="img-responsive" />
									<div class="overlay">
										<h4>Portfolio</h4>
										<div class="info nullbutton button" data-toggle="modal" data-target="#modal14">
											Show More</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-md-4 filtr-item g-width" data-category="3, 4" data-sort="04">
							<div class="hover ehover14">
								<a href="images/g16.jpg" class="swipebox" title="">
									<img src="images/g16.jpg" alt="" class="img-responsive" />
									<div class="overlay">
										<h4>Portfolio</h4>
										<div class="info nullbutton button" data-toggle="modal" data-target="#modal14">
											Show More</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-md-4 filtr-item g-width" data-category="3" data-sort="05">
							<div class="hover ehover14">
								<a href="images/g14.jpg" class="swipebox" title="">
									<img src="images/g14.jpg" alt="" class="img-responsive" />
									<div class="overlay">
										<h4>Portfolio</h4>
										<div class="info nullbutton button" data-toggle="modal" data-target="#modal14">
											Show More</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-md-4 filtr-item g-width" data-category="2, 4" data-sort="06">
							<div class="hover ehover14">
								<a href="images/g15.jpg" class="swipebox" title="">
									<img src="images/g15.jpg" alt="" class="img-responsive" />
									<div class="overlay">
										<h4>Portfolio</h4>
										<div class="info nullbutton button" data-toggle="modal" data-target="#modal14">
											Show More</div>
									</div>
								</a>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- Gallery Ends -->


	<!-- Ticket Booking -->




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
					<strong><a href="admin.php" style="color:red">Admin Panel</a></strong>
	
				</div>

			</div>
		</div>
	</div> <!-- Contact Ends -->


	<!--gallery-->
	<!-- Include jQuery & Filterizr -->
	<script src="js/jquery.filterizr.js"></script>
	<script src="js/controls.js"></script>
	<!-- Kick off Filterizr -->
	<script>
		$(function () {
			//Initialize filterizr with default options
			$('.filtr-container').filterizr();
		});
	</script>

	<!-- swipe box js -->
	<script src="js/jquery.swipebox.min.js"></script>
	<script type="text/javascript">
		jQuery(function ($) {
			$(".swipebox").swipebox();
		});
	</script>
	<!-- //swipe box js -->
	<!--//gallery-->

	<!--strat-date-piker-->
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<script src="js/jquery-ui.js"></script>
	<script>
		$(function () {
			$("#datepicker,#datepicker1").datepicker();
		});
	</script>
	<!--/End-date-piker-->

	<!-- Slide-To-Top JavaScript (No-Need-To-Change) -->
	<script type="text/javascript">
		$(document).ready(function () {
			$().UItoTop({
				easingType: 'easeOutQuart'
			});
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- //Slide-To-Top JavaScript -->

</body>

</html>