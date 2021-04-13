<!DOCTYPE html>
<html lang="en">
<head>
<title>Travelix</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
<meta name="viewport" content="width=device-width, initial-scale=1">1
<link rel="stylesheet" href="<?php echo e(URL::asset('css/bootstrap.min.css')); ?>"> 
<link rel="stylesheet" href="<?php echo e(URL::asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css')); ?>"> 
<link rel="stylesheet" href="<?php echo e(URL::asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')); ?>"> 
<link rel="stylesheet" href="<?php echo e(URL::asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')); ?>"> 
<link rel="stylesheet" href="<?php echo e(URL::asset('plugins/OwlCarousel2-2.2.1/animate.css')); ?>"> 
<link rel="stylesheet" href="<?php echo e(URL::asset('css/main_styles.css')); ?>"> 
<link rel="stylesheet" href="<?php echo e(URL::asset('css/responsive.css')); ?>"> 
<link rel="stylesheet" href="<?php echo e(URL::asset('css/maintravel.css')); ?>"> 

<script src="https://kit.fontawesome.com/332a215f17.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
<script type="text/javascript" src="<?php echo e(URL::asset('js/indiamain.js')); ?>"></script>

</head>
<style>
.grid{
	display:grid;
	grid-template-columns:30% 70%;
}
.grid img{
	height:300px;
	padding-right:20px;
}
footer{
  display: block; 
}
.blockquote-footer {
  display: block;
  font-size: 80%;
  color: #6c757d; 
}
.blockquote-footer::before {
    content: "\2014 \00A0"; 
}
.card-footer {
  padding: 0.75rem 1.25rem;
  background-color: rgba(0, 0, 0, 0.03);
  border-top: 1px solid rgba(0, 0, 0, 0.125); 
}
  .card-footer:last-child {
    border-radius: 0 0 calc(0.25rem - 1px) calc(0.25rem - 1px); 
}
.card-footer {
    border-bottom-right-radius: 0; 
	border-bottom-left-radius: 0;
	border-bottom-right-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem; 
	border-radius: 0;
}
.modal-footer {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: end;
  -ms-flex-pack: end;
  justify-content: flex-end;
  padding: 1rem;
  border-top: 1px solid #e9ecef; }
  .modal-footer > :not(:first-child) {
    margin-left: .25rem; }
  .modal-footer > :not(:last-child) {
    margin-right: .25rem; }

	.ftco-bg-dark {
  background: #3c312e; }

.ftco-footer {
  font-size: 16px;
  background: #222831;
  padding: 8em 0 8em 0; }
  .ftco-footer .ftco-footer-logo {
    text-transform: uppercase;
    letter-spacing: .1em; }
  .ftco-footer .ftco-footer-widget h2 {
    font-weight: normal;
    color: #fff;
    margin-bottom: 40px;
    font-size: 18px;
    font-weight: 400; }
  .ftco-footer .ftco-footer-widget ul li a span {
    color: #fff; }
  .ftco-footer .ftco-footer-widget .btn-primary {
    background: #fff !important;
    border: 2px solid #fff !important; }
    .ftco-footer .ftco-footer-widget .btn-primary:hover {
      background: #fff;
      border: 2px solid #fff !important; }
  .ftco-footer p {
    color: rgba(255, 255, 255, 0.7); }
  .ftco-footer a {
    color: rgba(255, 255, 255, 0.7); }
    .ftco-footer a:hover {
      color: #fff; }
  .ftco-footer .ftco-heading-2 {
    font-size: 17px;
    font-weight: 400;
    color: #000000; }

.ftco-footer-social li {
  list-style: none;
  margin: 0 10px 0 0;
  display: inline-block; }
  .ftco-footer-social li a {
    height: 50px;
    width: 50px;
    display: block;
    float: left;
    background: rgba(255, 255, 255, 0.05);
    border-radius: 50%;
    position: relative; }
    .ftco-footer-social li a span {
      position: absolute;
      font-size: 26px;
      top: 50%;
      left: 50%;
      -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%); }
    .ftco-footer-social li a:hover {
      color: #fff; }

.footer-small-nav > li {
  display: inline-block; }
  .footer-small-nav > li a {
    margin: 0 10px 10px 0; }
    .footer-small-nav > li a:hover, .footer-small-nav > li a:focus {
      color: #f85959; }

.media .ftco-icon {
  width: 100px; }
  .media .ftco-icon span {
    color: #f85959; }

	.ftco-vh-100 {
  height: 100vh; }
  @media (max-width: 1199.98px) {
    .ftco-vh-100 {
      height: inherit;
      padding-top: 5em;
      padding-bottom: 5em; } }

.ftco-vh-75 {
  height: 75vh;
  min-height: 700px; }
  @media (max-width: 1199.98px) {
    .ftco-vh-75 {
      min-height: 700px;
      height: inherit;
      padding-top: 5em;
      padding-bottom: 5em; } }

.ftco-tab-nav {
  padding: 0;
  margin: 0;
  display: inline-block !important; }
  @media (max-width: 767.98px) {
    .ftco-tab-nav {
      display: block !important;
      margin-bottom: 10px;
      width: 100% !important; } }
  .ftco-tab-nav li {
    padding: 0;
    margin: 0 5px;
    display: inline-block !important; }
    @media (max-width: 767.98px) {
      .ftco-tab-nav li {
        display: block !important;
        margin-bottom: 10px;
        width: 100% !important; } }
    .ftco-tab-nav li a {
      text-transform: uppercase;
      font-size: 14px;
      letter-spacing: .2em;
      color: #ccc;
      border: 2px solid #ccc;
      border-radius: 0 !important; }
      .ftco-tab-nav li a.active {
        background: none !important;
        color: black !important;
        border: 2px solid #000000; }

.ftco-animate {
  opacity: 0;
  visibility: hidden; }





</style>
<script>
	function check() {
		var destination = document.hotel.destination;
		var checkin  = document.hotel.checkin;
		var checkout = document.hotel.checkout;
		var adults = document.hotel.adults;
		var children = document.hotel.children;
		// var  = document.hotel.;
		// var  = document.hotel.;

			if (destination.value == 0) {
				alert("destination must be filled out");
				destination.style.border = "6px solid red";
				return false;
			}
			if (checkin.value == "") {
				alert("check - in must be filled out");
				checkin.style.border = "6px solid red";
				return false;
			}
			if (checkout.value == "") {
				alert("Check -out must be filled out");
				checkout.style.border = "6px solid red";
				return false;
			}
			if (checkin.value == checkout.value ) {
				alert("Date cannot be same");
				checkin.style.border = "6px solid blue";
				checkout.style.border = "6px solid blue";
				return false;
			}
			//   if (checkin.value > checkout.value) {
			//     alert("Check -out must be filled out");
			// 	checkout.style.border = "6px solid red";
			//     return false;
			//   }
			
			if (adults.value == 0) {
				alert(" Number of adults required");
				adults.style.border = "6px solid red";
				return false;
			}
			if (children.value == 0) {
				alert(" Number of children required");
				children.style.border = "6px solid red";
				return false;
			}

			//   if (.value == "") {
			//     alert(" must be filled out");
				
			// 	.style.border = "6px solid red";
			//     return false;
			//   }
			//   if (.value == "") {
			//     alert(" must be filled out");
				
			// 	.style.border = "6px solid red";
			//     return false;
			//   }
			else{
				alert("form submitted successfully!");
				return true;
			}



	}
	

function checkcar() {
		var destination = document.car.destination;
		var start  = document.car.start;
		var end = document.car.end;
		var adult = document.car.adult;
		var children = document.car.children;
		// var  = document.car.;
		// var  = document.car.;

	if (destination.value == 0) {
		alert("destination must be filled out");
		destination.style.border = "6px solid red";
		return false;
	}
	if (start.value == "") {
		alert("start - date must be filled out");
		start.style.border = "6px solid red";
		return false;
	}
	if (end.value == "") {
		alert("start -date must be filled out");
		end.style.border = "6px solid red";
		return false;
	}
	if (start.value == end.value ) {
		alert("Date cannot be same");
		start.style.border = "6px solid blue";
		end.style.border = "6px solid blue";
		return false;
	}
	//   if (checkin.value > checkout.value) {
	//     alert("Check -out must be filled out");
	// 	checkout.style.border = "6px solid red";
	//     return false;
	//   }
	
	if (adult.value == 0) {
		alert(" Number of adults required");
		adult.style.border = "6px solid red";
		return false;
	}
	if (children.value == 0) {
		alert(" Number of children required");
		children.style.border = "6px solid red";
		return false;
	}

	//   if (.value == "") {
	//     alert(" must be filled out");
		
	// 	.style.border = "6px solid red";
	//     return false;
	//   }
	//   if (.value == "") {
	//     alert(" must be filled out");
		
	// 	.style.border = "6px solid red";
	//     return false;
	//   }
	else{
		alert("form submitted successfully!");
		return true;
	}



}

function checkflight() {
		var flyto = document.flight.flyto;
		var flyfrom  = document.flight.flyfrom;
		var onboard = document.flight.onboard;
		var adult = document.flight.adult;
		var children = document.flight.children;

		if (flyto.value == 0) {
		alert("destination must be filled out");
		flyto.style.border = "6px solid red";
		return false;
	}
	if (flyfrom.value == 0) {
		alert("Source must be filled out");
		flyfrom.style.border = "6px solid red";
		return false;
	}
	if (flyto.value == flyfrom.value ) {
		alert("source and destination cannot be same");
		flyto.style.border = "6px solid blue";
		flyfrom.style.border = "6px solid blue";
		return false;
	}
	if (start.value == "") {
		alert("start - date must be filled out");
		start.style.border = "6px solid red";
		return false;
	}
	if (onboard.value == "") {
		alert("sDate of journey must be filled out");
		onboard.style.border = "6px solid red";
		return false;
	}
	else{
		alert("form submitted successfully!");
		return true;
	}



}

function checktrain() {
		var flyto = document.flight.flyto;
		var flyfrom  = document.flight.flyfrom;
		var onboard = document.flight.onboard;
		var adult = document.flight.adult;
		var children = document.flight.children;

		if (flyto.value == 0) {
		alert("destination must be filled out");
		flyto.style.border = "6px solid red";
		return false;
	}
	if (flyfrom.value == 0) {
		alert("Source must be filled out");
		flyfrom.style.border = "6px solid red";
		return false;
	}
	if (flyto.value == flyfrom.value ) {
		alert("source and destination cannot be same");
		flyto.style.border = "6px solid blue";
		flyfrom.style.border = "6px solid blue";
		return false;
	}
	if (start.value == "") {
		alert("start - date must be filled out");
		start.style.border = "6px solid red";
		return false;
	}
	if (onboard.value == "") {
		alert("sDate of journey must be filled out");
		onboard.style.border = "6px solid red";
		return false;
	}
	else{
		alert("form submitted successfully!");
		return true;
	}



}

</script>

<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">

		<!-- Main Navigation -->

		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
						<div class="logo_container">
							<div class="logo"><a href="#"><img src="images/logo.png" alt="">Travelville</a></div>
						</div>
						<div class="main_nav_container ml-auto">
							<ul class="main_nav_list">
								<li class="main_nav_item"><a href="http://127.0.0.1:8000/index">home</a></li>
								<li class="main_nav_item"><a href="http://127.0.0.1:8000/about">about us</a></li>
								<li class="main_nav_item"><a href="http://127.0.0.1:8000/tours">offers</a></li>
								<li class="main_nav_item"><a href="http://127.0.0.1:8000/blog">news</a></li>
								<li class="main_nav_item"><a href="#contact">contact</a></li>
							</ul>
						</div>

						<div class="hamburger">
							<i class="fa fa-bars trans_200"></i>
						</div>
					</div>
				</div>
			</div>	
		</nav>

	</header>

	<div class="menu trans_500">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<div class="menu_close_container"><div class="menu_close"></div></div>
			<div class="logo menu_logo"><a href="#"><img src="images/logo.png" alt=""></a></div>
			<ul>
				<li class="menu_item"><a href="#">home</a></li>
				<li class="menu_item"><a href="about.html">about us</a></li>
				<li class="menu_item"><a href="offers.html">offers</a></li>
				<li class="menu_item"><a href="blog.html">news</a></li>
				<li class="menu_item"><a href="contact.html">contact</a></li>
			</ul>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		
		<!-- Home Slider -->

		<div class="home_slider_container">
			
			<div class="owl-carousel owl-theme home_slider">
			
				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<!-- Image by https://unsplash.com/@anikindimitry  -->
					<div class="home_slider_background" style="background-image:url(images/hero.png)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1>discover</h1>
							<h1>India !</h1>
							<div class="button home_slider_button"><div class="button_bcg"></div><a href="#">explore now<span></span><span></span><span></span></a></div>
						</div>
					</div>
				</div>
				<div class="owl-item home_slider_item">
					<!-- Image by https://unsplash.com/@anikindimitry  -->
					<div class="home_slider_background" style="background-image:url(images/home_slider.jpg)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1>discover</h1>
							<h1>India !</h1>
							<div class="button home_slider_button"><div class="button_bcg"></div><a href="#">explore now<span></span><span></span><span></span></a></div>
						</div>
					</div>
				</div>
				<div class="owl-item home_slider_item">
					<!-- Image by https://unsplash.com/@anikindimitry  -->
					<div class="home_slider_background" style="background-image:url(images/home_slider.jpg)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1>discover</h1>
							<h1>India !</h1>
							<div class="button home_slider_button"><div class="button_bcg"></div><a href="#">explore now<span></span><span></span><span></span></a></div>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(images/bg_2.jpg)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1>discover</h1>
							<h1>India !</h1>
							<div class="button home_slider_button"><div class="button_bcg"></div><a href="#">explore now<span></span><span></span><span></span></a></div>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(images/bg_1.jpg)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1>discover</h1>
							<h1>India !</h1>
							<div class="button home_slider_button"><div class="button_bcg"></div><a href="#">explore now<span></span><span></span><span></span></a></div>
						</div>
					</div>
				</div>

			</div>
			
			<!-- Home Slider Nav - Prev -->
			<div class="home_slider_nav home_slider_prev">
				<svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
					<defs>
						<linearGradient id='home_grad_prev'>
							<stop offset='0%' stop-color='#fa9e1b'/>
							<stop offset='100%' stop-color='#8d4fff'/>
						</linearGradient>
					</defs>
					<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
					M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
					C22.545,2,26,5.541,26,9.909V23.091z"/>
					<polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
					11.042,18.219 "/>
				</svg>
			</div>
			
			<!-- Home Slider Nav - Next -->
			<div class="home_slider_nav home_slider_next">
				<svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
					<defs>
						<linearGradient id='home_grad_next'>
							<stop offset='0%' stop-color='#fa9e1b'/>
							<stop offset='100%' stop-color='#8d4fff'/>
						</linearGradient>
					</defs>
				<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
				M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
				C22.545,2,26,5.541,26,9.909V23.091z"/>
				<polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
				17.046,15.554 "/>
				</svg>
			</div>

			<!-- Home Slider Dots -->

			<div class="home_slider_dots">
				<ul id="home_slider_custom_dots" class="home_slider_custom_dots">
					<li class="home_slider_custom_dot active"><div></div>01.</li>
					<li class="home_slider_custom_dot"><div></div>02.</li>
					<li class="home_slider_custom_dot"><div></div>03.</li>
				</ul>
			</div>
			
		</div>

	</div>

	<!-- Search -->

	<div class="search">
		

		<!-- Search Contents -->
		
		<div class="container fill_height">
			<div class="row fill_height">
				<div class="col fill_height">

					<!-- Search Tabs -->

					<div class="search_tabs_container">
						<div class="search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_tab active d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/suitcase.png" alt=""><span>hotels</span></div>
							<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/bus.png" alt="">Bus</div>
							<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/departure.png" alt="">flights</div>
							<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/island.png" alt="">Trains</div>
							<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/cruise.png" alt="">cruises</div>
							<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/diving.png" alt="">activities</div>
						</div>		
					</div>

					<!-- Search Panel -->

					<div class="search_panel active">
						<form name="hotel" action="/hotel/store" id="search_form_1" method="POST" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item">
								<div>Destination</div>
								<select type="text" class="destination search_input" name="destination">
									<option value="0">select destination</option>
									<option value="Andhra Pradesh">Andhra Pradesh</option>
									<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
									<option value="Arunachal Pradesh">Arunachal Pradesh</option>
									<option value="Assam">Assam</option>
									<option value="Bihar">Bihar</option>
									<option value="Chandigarh">Chandigarh</option>
									<option value="Chhattisgarh">Chhattisgarh</option>
									<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
									<option value="Daman and Diu">Daman and Diu</option>
									<option value="Delhi">Delhi</option>
									<option value="Lakshadweep">Lakshadweep</option>
									<option value="Puducherry">Puducherry</option>
									<option value="Goa">Goa</option>
									<option value="Gujarat">Gujarat</option>
									<option value="Haryana">Haryana</option>
									<option value="Himachal Pradesh">Himachal Pradesh</option>
									<option value="Jammu and Kashmir">Jammu and Kashmir</option>
									<option value="Jharkhand">Jharkhand</option>
									<option value="Karnataka">Karnataka</option>
									<option value="Kerala">Kerala</option>
									<option value="Madhya Pradesh">Madhya Pradesh</option>
									<option value="Maharashtra">Maharashtra</option>
									<option value="Manipur">Manipur</option>
									<option value="Meghalaya">Meghalaya</option>
									<option value="Mizoram">Mizoram</option>
									<option value="Nagaland">Nagaland</option>
									<option value="Odisha">Odisha</option>
									<option value="Punjab">Punjab</option>
									<option value="Rajasthan">Rajasthan</option>
									<option value="Sikkim">Sikkim</option>
									<option value="Tamil Nadu">Tamil Nadu</option>
									<option value="Telangana">Telangana</option>
									<option value="Tripura">Tripura</option>
									<option value="Uttar Pradesh">Uttar Pradesh</option>
									<option value="Uttarakhand">Uttarakhand</option>
									<option value="West Bengal">West Bengal</option>
									</select>
								</select>
							</div>
							<div class="search_item">
								<div>check in</div>
								<input type="DATE" name="checkin"class="check_in search_input" placeholder="CHECK-IN">
							</div>
							<div class="search_item">
								<div>check out</div>
								<input type="DATE" name="checkout" class="check_out search_input" placeholder="CHECK-OUT">
							</div>
							<div class="search_item">
								<div>Adult</div>
								<select name="adults" id="adults_1" name="adult" class="dropdown_item_select search_input">
									<option value="0">Select</option>
									<option value="1">01</option>
									<option value="2">02</option>
									<option value="3">03</option>
								</select>
							</div>
							<div class="search_item">
								<div>children</div>
								<select name="children" id="children_1" name="children" class="dropdown_item_select search_input">
									<option value="0">Select</option>
									<option value="1">01</option>
									<option value="2">02</option>
									<option value="3">03</option>
								</select>
							</div>
							<button class="button search_button" onclick="return check()">search<span></span><span></span><span></span></button>
						</form>
					</div>

					<!-- Search Panel -->

					<div class="search_panel">
						<form name="Bus" action="/bus/store" method="POST" id="search_form_2" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item">
								<div>State</div>
								<select type="text" class="destination search_input" name="destination">
									<option value="0">select destination</option>
									<option value="Andhra Pradesh">Andhra Pradesh</option>
									<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
									<option value="Arunachal Pradesh">Arunachal Pradesh</option>
									<option value="Assam">Assam</option>
									<option value="Bihar">Bihar</option>
									<option value="Chandigarh">Chandigarh</option>
									<option value="Chhattisgarh">Chhattisgarh</option>
									<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
									<option value="Daman and Diu">Daman and Diu</option>
									<option value="Delhi">Delhi</option>
									<option value="Lakshadweep">Lakshadweep</option>
									<option value="Puducherry">Puducherry</option>
									<option value="Goa">Goa</option>
									<option value="Gujarat">Gujarat</option>
									<option value="Haryana">Haryana</option>
									<option value="Himachal Pradesh">Himachal Pradesh</option>
									<option value="Jammu and Kashmir">Jammu and Kashmir</option>
									<option value="Jharkhand">Jharkhand</option>
									<option value="Karnataka">Karnataka</option>
									<option value="Kerala">Kerala</option>
									<option value="Madhya Pradesh">Madhya Pradesh</option>
									<option value="Maharashtra">Maharashtra</option>
									<option value="Manipur">Manipur</option>
									<option value="Meghalaya">Meghalaya</option>
									<option value="Mizoram">Mizoram</option>
									<option value="Nagaland">Nagaland</option>
									<option value="Odisha">Odisha</option>
									<option value="Punjab">Punjab</option>
									<option value="Rajasthan">Rajasthan</option>
									<option value="Sikkim">Sikkim</option>
									<option value="Tamil Nadu">Tamil Nadu</option>
									<option value="Telangana">Telangana</option>
									<option value="Tripura">Tripura</option>
									<option value="Uttar Pradesh">Uttar Pradesh</option>
									<option value="Uttarakhand">Uttarakhand</option>
									<option value="West Bengal">West Bengal</option>
									</select>
								</select>
							</div>
							<div class="search_item">
								<div>Start Date</div>
								<input type="date" name="start" class="check_in search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>End date</div>
								<input type="date"  name="end"  class="check_out search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>Adult</div>
								<select name="adult" id="adults_1" name="adult" class="dropdown_item_select search_input">
									<option value="0">Select</option>
									<option value="1">01</option>
									<option value="2">02</option>
									<option value="3">03</option>
								</select>
							</div>
							<div class="search_item">
								<div>children</div>
								<select name="children" id="children_1" name="children" class="dropdown_item_select search_input">
									<option value="0">Select</option>
									<option value="1">01</option>
									<option value="2">02</option>
									<option value="3">03</option>
								</select>
							</div>
							<button class="button search_button" onclick="return checkcar()" >search<span></span><span></span><span></span></button>
						</form>
					</div>

					<!-- Search Panel -->

					<div class="search_panel">
						<form name="flight" action="#" id="search_form_3" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item">
								<div>Flying From</div>
								<select type="text" class="destination search_input" name="flyfrom">
									<option value="0">select destination</option>
									<option value="Chhatrapati Shivaji International Airport – BOM">Chhatrapati Shivaji International Airport – BOM</option>
									<option value="Kempegowda International Airport – BLR">Kempegowda International Airport – BLR</option>
									<option value="Chennai International Airport – MAA">Chennai International Airport – MAA</option>
									<option value="Netaji Subhas Chandra Bose International Airport – CCU">Netaji Subhas Chandra Bose International Airport – CCU</option>
									<option value="Chaudhary Charan Singh International Airport – LKO">Chaudhary Charan Singh International Airport – LKO</option>
									<option value="Sri Guru Ram Dass Jee International Airport – ATQ">Sri Guru Ram Dass Jee International Airport – ATQ</option>
									<option value="Visakhapatnam International Airport – VTZ">Visakhapatnam International Airport – VTZ</option>
									<option value="Kannur International Airport – CNN">Kannur International Airport – CNN</option>
									<option value="Surat International Airport – STV">Surat International Airport – STV</option>
									<option value="Devi Ahilya Bai Holkar Airport – IDR">Devi Ahilya Bai Holkar Airport – IDR</option>
									<option value="Cochin International Airport – COK 	Kochi, Kerala">Cochin International Airport – COK 	Kochi, Kerala</option>
									<option value="Sardar Vallabhbhai Patel International Airport – AMD">Sardar Vallabhbhai Patel International Airport – AMD</option>
									<option value="Indira Gandhi International Airport – DEL">Indira Gandhi International Airport – DEL</option>
									<option value="Dabolim Airport – GOI">Dabolim Airport – GOI</option>
									<option value="Pune Airport – PNQ">Pune Airport – PNQ</option>
									<option value="Thiruvananthapuram International Airport – TRV">Thiruvananthapuram International Airport – TRV</option>
									<option value="Coimbatore International Airport – CJB">Coimbatore International Airport – CJB</option>
									<option value="Calicut International Airport – CCJ">Calicut International Airport – CCJ</option>
									<option value="Biju Patnaik International Airport – BBI">Biju Patnaik International Airport – BBI</option>
									<option value="Lokpriya Gopinath Bordoloi International Airport – GAU">Lokpriya Gopinath Bordoloi International Airport – GAU</option>
									<option value="Lal Bahadur Shastri International Airport – VNS">Lal Bahadur Shastri International Airport – VNS</option>
									<option value="Rajiv Gandhi International Airport- HYD">Rajiv Gandhi International Airport- HYD</option>
									<option value="Tiruchirappalli International Airport – TRZ">Tiruchirappalli International Airport – TRZ</option>
									<option value="Chandigarh International Airport – IXC">Chandigarh International Airport – IXC</option>
									<option value="Mangalore International Airport – IXE">Mangalore International Airport – IXE</option>
									<option value="Jay Prakash Narayan International Airport – PAT">Jay Prakash Narayan International Airport – PAT</option>
									<option value="Bagdogra International Airport – IXB">Bagdogra International Airport – IXB</option>
									<option value="Madurai Airport – IXM">Madurai Airport – IXM</option>
									<option value="Jaipur International Airport – JAI">Jaipur International Airport – JAI</option>
									<option value="Imphal International Airport – IMF">Imphal International Airport – IMF</option>
									<option value="Sheikhul Aalam International Airport – SXR">Sheikhul Aalam International Airport – SXR</option>
									<option value="Dr. Babasaheb Ambedkar International Airport – NAG">Dr. Babasaheb Ambedkar International Airport – NAG</option>
									<option value="Gaya Airport	Bihar	GAY	">Gaya Airport	Bihar	GAY	</option>
									<option value="Pasighat Airport	Arunachal Pradesh	IXT	">Pasighat Airport	Arunachal Pradesh	IXT	</option>
									<option value="Tirupati Airport TIR">Tirupati Airport TIR</option>
									<option value="Rajahmundry Airport RJA	">Rajahmundry Airport RJA	</option>
									<option value="Vijayawada Airport VGA">Vijayawada Airport VGA</option>
									<option value="Kadapa Airport	Andhra Pradesh	CDP">Kadapa Airport	Andhra Pradesh	CDP</option>
									<option value="Cooch Behar Airport	COH">Cooch Behar Airport COH</option>
									
								</select>
							</div>
							<div class="search_item">
								<div>Flying to</div>
								<select type="text" class="destination search_input" name="flyto">
									<option value="0">select destination</option>
									<option value="Chhatrapati Shivaji International Airport – BOM">Chhatrapati Shivaji International Airport – BOM</option>
									<option value="Kempegowda International Airport – BLR">Kempegowda International Airport – BLR</option>
									<option value="Chennai International Airport – MAA">Chennai International Airport – MAA</option>
									<option value="Netaji Subhas Chandra Bose International Airport – CCU">Netaji Subhas Chandra Bose International Airport – CCU</option>
									<option value="Chaudhary Charan Singh International Airport – LKO">Chaudhary Charan Singh International Airport – LKO</option>
									<option value="Sri Guru Ram Dass Jee International Airport – ATQ">Sri Guru Ram Dass Jee International Airport – ATQ</option>
									<option value="Visakhapatnam International Airport – VTZ">Visakhapatnam International Airport – VTZ</option>
									<option value="Kannur International Airport – CNN">Kannur International Airport – CNN</option>
									<option value="Surat International Airport – STV">Surat International Airport – STV</option>
									<option value="Devi Ahilya Bai Holkar Airport – IDR">Devi Ahilya Bai Holkar Airport – IDR</option>
									<option value="Cochin International Airport – COK 	Kochi, Kerala">Cochin International Airport – COK 	Kochi, Kerala</option>
									<option value="Sardar Vallabhbhai Patel International Airport – AMD">Sardar Vallabhbhai Patel International Airport – AMD</option>
									<option value="Indira Gandhi International Airport – DEL">Indira Gandhi International Airport – DEL</option>
									<option value="Dabolim Airport – GOI">Dabolim Airport – GOI</option>
									<option value="Pune Airport – PNQ">Pune Airport – PNQ</option>
									<option value="Thiruvananthapuram International Airport – TRV">Thiruvananthapuram International Airport – TRV</option>
									<option value="Coimbatore International Airport – CJB">Coimbatore International Airport – CJB</option>
									<option value="Calicut International Airport – CCJ">Calicut International Airport – CCJ</option>
									<option value="Biju Patnaik International Airport – BBI">Biju Patnaik International Airport – BBI</option>
									<option value="Lokpriya Gopinath Bordoloi International Airport – GAU">Lokpriya Gopinath Bordoloi International Airport – GAU</option>
									<option value="Lal Bahadur Shastri International Airport – VNS">Lal Bahadur Shastri International Airport – VNS</option>
									<option value="Rajiv Gandhi International Airport- HYD">Rajiv Gandhi International Airport- HYD</option>
									<option value="Tiruchirappalli International Airport – TRZ">Tiruchirappalli International Airport – TRZ</option>
									<option value="Chandigarh International Airport – IXC">Chandigarh International Airport – IXC</option>
									<option value="Mangalore International Airport – IXE">Mangalore International Airport – IXE</option>
									<option value="Jay Prakash Narayan International Airport – PAT">Jay Prakash Narayan International Airport – PAT</option>
									<option value="Bagdogra International Airport – IXB">Bagdogra International Airport – IXB</option>
									<option value="Madurai Airport – IXM">Madurai Airport – IXM</option>
									<option value="Jaipur International Airport – JAI">Jaipur International Airport – JAI</option>
									<option value="Imphal International Airport – IMF">Imphal International Airport – IMF</option>
									<option value="Sheikhul Aalam International Airport – SXR">Sheikhul Aalam International Airport – SXR</option>
									<option value="Dr. Babasaheb Ambedkar International Airport – NAG">Dr. Babasaheb Ambedkar International Airport – NAG</option>
									<option value="Gaya Airport	Bihar	GAY	">Gaya Airport	Bihar	GAY	</option>
									<option value="Pasighat Airport	Arunachal Pradesh	IXT	">Pasighat Airport	Arunachal Pradesh	IXT	</option>
									<option value="Tirupati Airport TIR">Tirupati Airport TIR</option>
									<option value="Rajahmundry Airport RJA	">Rajahmundry Airport RJA	</option>
									<option value="Vijayawada Airport VGA">Vijayawada Airport VGA</option>
									<option value="Kadapa Airport	Andhra Pradesh	CDP">Kadapa Airport	Andhra Pradesh	CDP</option>
									<option value="Cooch Behar Airport	COH">Cooch Behar Airport COH</option>
									
								</select>
							</div>
							<div class="search_item">
								<div>Onboard date</div>
								<input type="date" name="onboard" class="check_in search_input" placeholder="YYYY-MM-DD">
							</div>

							<div class="search_item">
								<div>adults</div>
								<select name="adult" id="adults_3" class="dropdown_item_select search_input">
									<option>01</option>
									<option>02</option>
									<option>03</option>
								</select>
							</div>
							<div class="search_item">
								<div>children</div>
								<select name="children" id="children_3" class="dropdown_item_select search_input">
									<option>0</option>
									<option>02</option>
									<option>03</option>
								</select>
							</div>
							<button class="button search_button" onclick="return checkflight()" >search<span></span><span></span><span></span></button>
						</form>
					</div>

					<!-- Search Panel -->

					<div class="search_panel">
						<form action="#" id="search_form_4" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item">
								<div>Source</div>
								<select type="text" class="destination search_input" name="trainfrom">
									<option value="AGRA CANTT	AGC">AGRA CANTT	AGC</option>
									<option value="AHMEDABAD JN	ADI">AHMEDABAD JN	ADI</option>
									<option value="ALLAHABAD CITY	ALY">ALLAHABAD CITY	ALY</option>
									<option value="ALLAHABAD JN	ALD">ALLAHABAD JN	ALD</option>
									<option value="ALUVA	AWY">ALUVA	AWY</option>
									<option value="AMBALA CANT JN	UMB">AMBALA CANT JN	UMB</option>
									<option value="AMRITSAR JN	ASR">AMRITSAR JN	ASR</option>
									<option value="ASANSOL JN	ASN">ASANSOL JN	ASN</option>
									<option value="BANGALORE EAST	BNCE">BANGALORE EAST	BNCE</option>
									<option value="BARABANKI JN	BBK">BARABANKI JN	BBK</option>
									<option value="BARDDHAMAN JN	BWN">BARDDHAMAN JN	BWN</option>
									<option value="BAREILLY	BE">BAREILLY	BE</option>
									<option value="BEAS	BEAS">BEAS	BEAS</option>
									<option value="BHATAPARA	BYT">BHATAPARA	BYT</option>
									<option value="BHOPAL JN	BPL">BHOPAL JN	BPL</option>
									<option value="BHUBANESWAR	BBS">BHUBANESWAR	BBS</option>
									<option value="BHUSAVAL JN	BSL">BHUSAVAL JN	BSL</option>
									<option value="BILASPUR JN	BSP">BILASPUR JN	BSP</option>
									<option value="BINA JN	BINA">BINA JN	BINA</option>
									<option value="CHENNAI CENTRAL	MAS">CHENNAI CENTRAL	MAS</option>
									<option value="DADAR	DR">DADAR	DR</option>
									<option value="DAUND JN	DD">DAUND JN	DD</option>
									<option value="DELHI	DLI">DELHI	DLI</option>
									<option value="DURG	DURG">DURG	DURG</option>
									<option value="DURGAPUR	DGR">DURGAPUR	DGR</option>
									<option value="ERNAKULAM JN	ERS">ERNAKULAM JN	ERS</option>
									<option value="ERODE JN	ED">ERODE JN	ED</option>
									<option value="FARIDABAD	FDB">FARIDABAD	FDB</option>
									<option value="GHAZIABAD	GZB">GHAZIABAD	GZB</option>
									<option value="GORAKHPUR JN	GKP">GORAKHPUR JN	GKP</option>
									<option value="GUDUR JN	GDR">GUDUR JN	GDR</option>
									<option value="GWALIOR	GWL">GWALIOR	GWL</option>
									<option value="H NIZAMUDDIN	NZM">H NIZAMUDDIN	NZM</option>
									<option value="HOWRAH JN	HWH">HOWRAH JN	HWH</option>
									<option value="IGATPURI	IGP">IGATPURI	IGP</option>
									<option value="ITARSI JN	ET">ITARSI JN	ET</option>
									<option value="JABALPUR	JBP">JABALPUR	JBP</option>
									<option value="JAIPUR	JP">JAIPUR	JP</option>
									<option value="JALANDHAR CANT	JRC">JALANDHAR CANT	JRC</option>
									<option value="JALANDHAR CITY	JUC">JALANDHAR CITY	JUC</option>
									<option value="JALGAON JN	JL">JALGAON JN	JL</option>
									<option value="JHANSI JN	JHS">JHANSI JN	JHS</option>
									<option value="KACHEGUDA	KCG">KACHEGUDA	KCG</option>
									<option value="KALYAN JN	KYN">KALYAN JN	KYN</option>
									<option value="KANPUR CENTRAL	CNB">KANPUR CENTRAL	CNB</option>
									<option value="KATNI	KTE">KATNI	KTE</option>
									<option value="KHARAGPUR JN	KGP">KHARAGPUR JN	KGP</option>
									<option value="KHURDA ROAD JN	KUR">KHURDA ROAD JN	KUR</option>
									<option value="KIUL JN	KIUL">KIUL JN	KIUL</option>
									<option value="KOTA JN	KOTA">KOTA JN	KOTA</option>
									<option value="LUCKNOW CITY	LC">LUCKNOW CITY	LC</option>
									<option value="LUCKNOW NR	LKO">LUCKNOW NR	LKO</option>
									<option value="LUDHIANA JN	LDH">LUDHIANA JN	LDH</option>
									<option value="MANMAD JN	MMR">MANMAD JN	MMR</option>
									<option value="MATHURA JN	MTJ">MATHURA JN	MTJ</option>
									<option value="MOKAMEH JN	MKA">MOKAMEH JN	MKA</option>
									<option value="MORADABAD	MB">MORADABAD	MB</option>
									<option value="MUGHAL SARAI JN	MGS">MUGHAL SARAI JN	MGS</option>
									<option value="N GHAZIABAD	GZN">N GHAZIABAD	GZN</option>
									<option value="NADIAD JN	ND">NADIAD JN	ND</option>
									<option value="NAGPUR	NGP">NAGPUR	NGP</option>
									<option value="NASIK ROAD	NK">NASIK ROAD	NK</option>
									<option value="NELLORE	NLR">NELLORE	NLR</option>
									<option value="NEW DELHI	NDLS">NEW DELHI	NDLS</option>
									<option value="ONGOLE	OGL">ONGOLE	OGL</option>
									<option value="PATNA JN	PNBE">PATNA JN	PNBE</option>
									<option value="PHAGWARA JN	PGW">PHAGWARA JN	PGW</option>
									<option value="PHILLAUR JN	PHR">PHILLAUR JN	PHR</option>
									<option value="PUNE JN	PUNE">PUNE JN	PUNE</option>
									<option value="RAIPUR JN	R">RAIPUR JN	R</option>
									<option value="RAJAHMUNDRY	RJY">RAJAHMUNDRY	RJY</option>
									<option value="RENIGUNTA JN	RU">RENIGUNTA JN	RU</option>
									<option value="ROORKEE	RK">ROORKEE	RK</option>
									<option value="SALEM JN	SA">SALEM JN	SA</option>
									<option value="SALEM TOWN	SXT">SALEM TOWN	SXT</option>
									<option value="SAWAI MADHOPUR	SWM">SAWAI MADHOPUR	SWM</option>
									<option value="SHAHJEHANPUR	SPN">SHAHJEHANPUR	SPN</option>
									<option value="SURAT	ST">SURAT	ST</option>
									<option value="TATANAGAR JN	TATA">TATANAGAR JN	TATA</option>
									<option value="THANE	TNA">THANE	TNA</option>
									<option value="THRISUR	TCR">THRISUR	TCR</option>
									<option value="TIRUPATI	TPTY">TIRUPATI	TPTY</option>
									<option value="TUNDLA JN	TDL">TUNDLA JN	TDL</option>
									<option value="VADODARA JN	BRC">VADODARA JN	BRC</option>
									<option value="VALSAD	BL">VALSAD	BL</option>
									<option value="VARANASI JN	BSB">VARANASI JN	BSB</option>
									<option value="VIDISHA	BHS">VIDISHA	BHS</option>
									<option value="VIJAYAWADA JN	BZA">VIJAYAWADA JN	BZA</option>
									<option value="VISAKHAPATNAM	VSKP">VISAKHAPATNAM	VSKP</option>
									<option value="VIZIANAGRAM JN	VZM">VIZIANAGRAM JN	VZM</option>
								</select>
							</div>
							<div class="search_item">
								<div>Destination</div>
								<select type="text" class="destination search_input" name="trainto">
									<option value="AGRA CANTT	AGC">AGRA CANTT	AGC</option>
									<option value="AHMEDABAD JN	ADI">AHMEDABAD JN	ADI</option>
									<option value="ALLAHABAD CITY	ALY">ALLAHABAD CITY	ALY</option>
									<option value="ALLAHABAD JN	ALD">ALLAHABAD JN	ALD</option>
									<option value="ALUVA	AWY">ALUVA	AWY</option>
									<option value="AMBALA CANT JN	UMB">AMBALA CANT JN	UMB</option>
									<option value="AMRITSAR JN	ASR">AMRITSAR JN	ASR</option>
									<option value="ASANSOL JN	ASN">ASANSOL JN	ASN</option>
									<option value="BANGALORE EAST	BNCE">BANGALORE EAST	BNCE</option>
									<option value="BARABANKI JN	BBK">BARABANKI JN	BBK</option>
									<option value="BARDDHAMAN JN	BWN">BARDDHAMAN JN	BWN</option>
									<option value="BAREILLY	BE">BAREILLY	BE</option>
									<option value="BEAS	BEAS">BEAS	BEAS</option>
									<option value="BHATAPARA	BYT">BHATAPARA	BYT</option>
									<option value="BHOPAL JN	BPL">BHOPAL JN	BPL</option>
									<option value="BHUBANESWAR	BBS">BHUBANESWAR	BBS</option>
									<option value="BHUSAVAL JN	BSL">BHUSAVAL JN	BSL</option>
									<option value="BILASPUR JN	BSP">BILASPUR JN	BSP</option>
									<option value="BINA JN	BINA">BINA JN	BINA</option>
									<option value="CHENNAI CENTRAL	MAS">CHENNAI CENTRAL	MAS</option>
									<option value="DADAR	DR">DADAR	DR</option>
									<option value="DAUND JN	DD">DAUND JN	DD</option>
									<option value="DELHI	DLI">DELHI	DLI</option>
									<option value="DURG	DURG">DURG	DURG</option>
									<option value="DURGAPUR	DGR">DURGAPUR	DGR</option>
									<option value="ERNAKULAM JN	ERS">ERNAKULAM JN	ERS</option>
									<option value="ERODE JN	ED">ERODE JN	ED</option>
									<option value="FARIDABAD	FDB">FARIDABAD	FDB</option>
									<option value="GHAZIABAD	GZB">GHAZIABAD	GZB</option>
									<option value="GORAKHPUR JN	GKP">GORAKHPUR JN	GKP</option>
									<option value="GUDUR JN	GDR">GUDUR JN	GDR</option>
									<option value="GWALIOR	GWL">GWALIOR	GWL</option>
									<option value="H NIZAMUDDIN	NZM">H NIZAMUDDIN	NZM</option>
									<option value="HOWRAH JN	HWH">HOWRAH JN	HWH</option>
									<option value="IGATPURI	IGP">IGATPURI	IGP</option>
									<option value="ITARSI JN	ET">ITARSI JN	ET</option>
									<option value="JABALPUR	JBP">JABALPUR	JBP</option>
									<option value="JAIPUR	JP">JAIPUR	JP</option>
									<option value="JALANDHAR CANT	JRC">JALANDHAR CANT	JRC</option>
									<option value="JALANDHAR CITY	JUC">JALANDHAR CITY	JUC</option>
									<option value="JALGAON JN	JL">JALGAON JN	JL</option>
									<option value="JHANSI JN	JHS">JHANSI JN	JHS</option>
									<option value="KACHEGUDA	KCG">KACHEGUDA	KCG</option>
									<option value="KALYAN JN	KYN">KALYAN JN	KYN</option>
									<option value="KANPUR CENTRAL	CNB">KANPUR CENTRAL	CNB</option>
									<option value="KATNI	KTE">KATNI	KTE</option>
									<option value="KHARAGPUR JN	KGP">KHARAGPUR JN	KGP</option>
									<option value="KHURDA ROAD JN	KUR">KHURDA ROAD JN	KUR</option>
									<option value="KIUL JN	KIUL">KIUL JN	KIUL</option>
									<option value="KOTA JN	KOTA">KOTA JN	KOTA</option>
									<option value="LUCKNOW CITY	LC">LUCKNOW CITY	LC</option>
									<option value="LUCKNOW NR	LKO">LUCKNOW NR	LKO</option>
									<option value="LUDHIANA JN	LDH">LUDHIANA JN	LDH</option>
									<option value="MANMAD JN	MMR">MANMAD JN	MMR</option>
									<option value="MATHURA JN	MTJ">MATHURA JN	MTJ</option>
									<option value="MOKAMEH JN	MKA">MOKAMEH JN	MKA</option>
									<option value="MORADABAD	MB">MORADABAD	MB</option>
									<option value="MUGHAL SARAI JN	MGS">MUGHAL SARAI JN	MGS</option>
									<option value="N GHAZIABAD	GZN">N GHAZIABAD	GZN</option>
									<option value="NADIAD JN	ND">NADIAD JN	ND</option>
									<option value="NAGPUR	NGP">NAGPUR	NGP</option>
									<option value="NASIK ROAD	NK">NASIK ROAD	NK</option>
									<option value="NELLORE	NLR">NELLORE	NLR</option>
									<option value="NEW DELHI	NDLS">NEW DELHI	NDLS</option>
									<option value="ONGOLE	OGL">ONGOLE	OGL</option>
									<option value="PATNA JN	PNBE">PATNA JN	PNBE</option>
									<option value="PHAGWARA JN	PGW">PHAGWARA JN	PGW</option>
									<option value="PHILLAUR JN	PHR">PHILLAUR JN	PHR</option>
									<option value="PUNE JN	PUNE">PUNE JN	PUNE</option>
									<option value="RAIPUR JN	R">RAIPUR JN	R</option>
									<option value="RAJAHMUNDRY	RJY">RAJAHMUNDRY	RJY</option>
									<option value="RENIGUNTA JN	RU">RENIGUNTA JN	RU</option>
									<option value="ROORKEE	RK">ROORKEE	RK</option>
									<option value="SALEM JN	SA">SALEM JN	SA</option>
									<option value="SALEM TOWN	SXT">SALEM TOWN	SXT</option>
									<option value="SAWAI MADHOPUR	SWM">SAWAI MADHOPUR	SWM</option>
									<option value="SHAHJEHANPUR	SPN">SHAHJEHANPUR	SPN</option>
									<option value="SURAT	ST">SURAT	ST</option>
									<option value="TATANAGAR JN	TATA">TATANAGAR JN	TATA</option>
									<option value="THANE	TNA">THANE	TNA</option>
									<option value="THRISUR	TCR">THRISUR	TCR</option>
									<option value="TIRUPATI	TPTY">TIRUPATI	TPTY</option>
									<option value="TUNDLA JN	TDL">TUNDLA JN	TDL</option>
									<option value="VADODARA JN	BRC">VADODARA JN	BRC</option>
									<option value="VALSAD	BL">VALSAD	BL</option>
									<option value="VARANASI JN	BSB">VARANASI JN	BSB</option>
									<option value="VIDISHA	BHS">VIDISHA	BHS</option>
									<option value="VIJAYAWADA JN	BZA">VIJAYAWADA JN	BZA</option>
									<option value="VISAKHAPATNAM	VSKP">VISAKHAPATNAM	VSKP</option>
									<option value="VIZIANAGRAM JN	VZM">VIZIANAGRAM JN	VZM</option>
								</select>
							</div>
							<div class="search_item">
								<div>Date of travelling</div>
								<input type="date" name="traveldate" class="check_in search_input" placeholder="YYYY-MM-DD">
							</div>

							<div class="search_item">
								<div>adults</div>
								<select name="adults" id="adults_4" class="dropdown_item_select search_input">
									<option>01</option>
									<option>02</option>
									<option>03</option>
								</select>
							</div>
							<div class="search_item">
								<div>children</div>
								<select name="children" id="children_4" class="dropdown_item_select search_input">
									<option>0</option>
									<option>02</option>
									<option>03</option>
								</select>
							</div>
							<button class="button search_button" onclick="return checktrain()" >search<span></span><span></span><span></span></button>
						</form>
					</div>

					<!-- Search Panel -->

					<div class="search_panel">
						<form action="#" id="search_form_5" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item">
								<div>destination</div>
								<input type="text" class="destination search_input" required="required">
							</div>
							<div class="search_item">
								<div>check in</div>
								<input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>check out</div>
								<input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>adults</div>
								<select name="adults" id="adults_5" class="dropdown_item_select search_input">
									<option>01</option>
									<option>02</option>
									<option>03</option>
								</select>
							</div>
							<div class="search_item">
								<div>children</div>
								<select name="children" id="children_5" class="dropdown_item_select search_input">
									<option>0</option>
									<option>02</option>
									<option>03</option>
								</select>
							</div>
							<button class="button search_button">search<span></span><span></span><span></span></button>
						</form>
					</div>

					<!-- Search Panel -->

					<div class="search_panel">
						<form action="#" id="search_form_6" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item">
								<div>destination</div>
								<input type="text" class="destination search_input" required="required">
							</div>
							<div class="search_item">
								<div>check in</div>
								<input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>check out</div>
								<input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>adults</div>
								<select name="adults" id="adults_6" class="dropdown_item_select search_input">
									<option>01</option>
									<option>02</option>
									<option>03</option>
								</select>
							</div>
							<div class="search_item">
								<div>children</div>
								<select name="children" id="children_6" class="dropdown_item_select search_input">
									<option>0</option>
									<option>02</option>
									<option>03</option>
								</select>
							</div>
							<button class="button search_button">search<span></span><span></span><span></span></button>
						</form>
					</div>
				</div>
			</div>
		</div>		
	</div>

	<div class="intro">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="intro_title text-center">We have the best tours</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="intro_text text-center">
						<p>Beautiful places depicting various cultures and ethics of India. World class monuments along with heritage site depicting ancient history, a symbol of pride.</p>
					</div>
				</div>
			</div>
			<div class="row intro_items">

				<!-- Intro Item -->

				<div class="col-sm-4 intro_col">
					<div class="intro_item">
						<div class="intro_item_overlay"></div>
						<!-- Image by https://unsplash.com/@dnevozhai  -->
						<div class="intro_item_background" style="background-image:url(images/goldentemple.jpg)"></div>
						<div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
							<div class="intro_date">May 25th - June 01st</div>
							<div class="button intro_button"><div class="button_bcg"></div><a href="#">Book now<span></span><span></span><span></span></a></div>
							<div class="intro_center text-center">
								<h1>Punjab</h1>
								<div class="intro_price">From $450</div>
								<div class="rating rating_4">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Intro Item -->

				<div class="col-sm-4 intro_col">
					<div class="intro_item">
						<div class="intro_item_overlay"></div>
						<!-- Image by https://unsplash.com/@hellolightbulb  -->
						<div class="intro_item_background" style="background-image:url(images/lotustemple.jpg)"></div>
						<div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
							<div class="intro_date">May 25th - June 01st</div>
							<div class="button intro_button"><div class="button_bcg"></div><a href="#">Book now<span></span><span></span><span></span></a></div>
							<div class="intro_center text-center">
								<h1>Delhi</h1>
								<div class="intro_price">From $850</div>
								<div class="rating rating_4">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Intro Item -->

				<div class="col-sm-4 intro_col">
					<div class="intro_item">
						<div class="intro_item_overlay"></div>
						<!-- Image by https://unsplash.com/@willianjusten  -->
						<div class="intro_item_background" style="background-image:url(images/tajmahal.jpg)"></div>
						<div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
							<div class="intro_date">May 25th - June 01st</div>
							<div class="button intro_button"><div class="button_bcg"></div><a href="#">Book now<span></span><span></span><span></span></a></div>
							<div class="intro_center text-center">
								<h1>Agra</h1>
								<div class="intro_price">From $750</div>
								<div class="rating rating_4">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</div>
						</div>
					</div>
				</div>


			</div>
		</div>
	</div>
	
	<div class="cta">
		<!-- Image by https://unsplash.com/@thanni  -->
		<div class="cta_background" style="background-image:url(images/cta.jpg)"></div>
		
		<div class="container">
			<div class="row">
				<div class="col">

					<!-- CTA Slider -->

					<div class="cta_slider_container">
						<div class="owl-carousel owl-theme cta_slider">

							<!-- CTA Slider Item -->
							<div class="owl-item cta_item text-center">
								<div class="grid">
									<div>
										<img src="images/hawamahal.jpg" alt="Hawa-Mahal">
									</div>
									<div>
										<div class="cta_title">Rajasthan Gold package</div>
											<div class="rating_r rating_r_4">
												<i></i>
												<i></i>
												<i></i>
												<i></i>
												<i></i>
											</div>
											<p class="cta_text">Rajasthan a place of tombs and forts is always a place to go for as a tourist in a premium packages. Lot of ancient history of our country starting from many great kings have built their forts over here.</p>
											<div class="button cta_button"><div class="button_bcg"></div><a href="#">book now<span></span><span></span><span></span></a></div>
									</div>
								</div>
								
							</div>
							<div class="owl-item cta_item text-center">
								<div class="grid">
									<div>
										<img src="images/goldentemple.jpg" alt="Hawa-Mahal">
									</div>
									<div>
										<div class="cta_title">Punjab Premium Tour</div>
											<div class="rating_r rating_r_4">
												<i></i>
												<i></i>
												<i></i>
												<i></i>
												<i></i>
											</div>
											<p class="cta_text">Punjab - land of 5 river is really famous for it's culture , heritage, food and residents of the state. Not only this but many tourist attractions like Golden Temple and Jalianwala bagh are some of the famous tourist spots.</p>
											<div class="button cta_button"><div class="button_bcg"></div><a href="#">book now<span></span><span></span><span></span></a></div>
									</div>
								</div>
								
							</div>
							<div class="owl-item cta_item text-center">
								<div class="grid">
									<div>
										<img src="images/lotustemple.jpg" alt="lotus -temple">
									</div>
									<div>
										<div class="cta_title"></div>
											<div class="rating_r rating_r_4">
												<i></i>
												<i></i>
												<i></i>
												<i></i>
												<i></i>
											</div>
											<p class="cta_text">Delhi the capital of India has many sites reflecting and depicting ancient India's history, art as well as architecture. Family tour to Delhi for a week is one of the best vacations to have.</p>
											<div class="button cta_button"><div class="button_bcg"></div><a href="#">book now<span></span><span></span><span></span></a></div>
									</div>
								</div>
								
							</div>
							<div class="owl-item cta_item text-center">
								<div class="grid">
									<div>
										<img src="images/tajmahal.jpg" alt="taj-mahal">
									</div>
									<div>
										<div class="cta_title"></div>
											<div class="rating_r rating_r_4">
												<i></i>
												<i></i>
												<i></i>
												<i></i>
												<i></i>
											</div>
											<p class="cta_text">Agra also called the city of tombs is one of the ancient cities beautifully sculptured from the time of mughals dated back in the 18th century. It's world class architecture along with its royal style dome shaped monuments marks it a place for tourists all over the globe. The various sites to visit in agra are Taj Mahal, Agra Fort, Fatehpur Sikri, Itmad-ud-Daulah's Tomb, Akbar's Tomb ,Moti Masjid, Sikandra Fort, Mehtab Bagh, Taj Nature Walk and Jama Masjid.</p>
											<div class="button cta_button"><div class="button_bcg"></div><a href="#">book now<span></span><span></span><span></span></a></div>
									</div>
								</div>
								
							</div>
							



							
							
						</div>

						<!-- CTA Slider Nav - Prev -->
						<div class="cta_slider_nav cta_slider_prev">
							<svg version="1.1" id="Layer_4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
								<defs>
									<linearGradient id='cta_grad_prev'>
										<stop offset='0%' stop-color='#fa9e1b'/>
										<stop offset='100%' stop-color='#8d4fff'/>
									</linearGradient>
								</defs>
								<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
								M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
								C22.545,2,26,5.541,26,9.909V23.091z"/>
								<polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
								11.042,18.219 "/>
							</svg>
						</div>
						
						<!-- CTA Slider Nav - Next -->
						<div class="cta_slider_nav cta_slider_next">
							<svg version="1.1" id="Layer_5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
								<defs>
									<linearGradient id='cta_grad_next'>
										<stop offset='0%' stop-color='#fa9e1b'/>
										<stop offset='100%' stop-color='#8d4fff'/>
									</linearGradient>
								</defs>
							<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
							M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
							C22.545,2,26,5.541,26,9.909V23.091z"/>
							<polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
							17.046,15.554 "/>
							</svg>
						</div>

					</div>

				</div>
			</div>
		</div>
					
	</div>
	<section class="about section mt-5" id="pl">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center heading-section mb-5">
            <h2 class="text-black mb-2">Welcome to Travel2India</h2>
            <p>We welcome you to our Travel & Tourism Website. We provide all-in-one effort for our customers by providing
              cultural, Natural and Historical Tourism to our customers.</p>
          </div>
        </div>
        <div class="row img-wrap mb-5 mb-lg-10">
          <div class="col-12">
            <div class="row">
              <div class="mb-4 margin-lg-0 col-lg-6 order-lg-2">
                <a href="#" class="effect">
                  <img src="images/culture.jpg" alt="Loading" class="img-fluid">
                </a>
              </div>
              <div class="col-lg-5 mr-auto text-lg-right align-self-center order-lg-1">
                <h2 class="text-black">Culture</h2>
                <p class="mb-4">
                  The Indian culture varies like its vast geography.People speak in different languages, dress differently,
                   follow different religions, eat different food but are of the same temperament.
                </p>
                <a href="#" class="btn btn-about">Read More</a>
              </div>
            </div>
          </div>
        </div>
        <!--------->
        <div class="row img-wrap mb-5 mb-lg-10">
          <div class="col-12">
            <div class="row">
              <div class="mb-4 margin-lg-0 col-lg-6">
                <a href="#" class="effect">
                  <img src="images/hero.png" alt="Loading" class="img-fluid">
                </a>
              </div>
              <div class="col-lg-5 ml-auto align-self-center order-lg-1" id="">
                <h2 class="text-black">History</h2>
                <p class="mb-4">
                  India is rich in culture,traditions,heritage buildings, temples, forts and palaces. 
        Famous Indian Monuments includes Old Churches of Goa ,The Taj Mahal, Qutab Minar of Delhi, Charminar, 
        Red fort and Jantar mantar, these are also few most visited Heritage Sites in India.
                </p>
                <a href="#" class="btn btn-about">Read More</a>
              </div>
            </div>
          </div>
        </div>
        <!--------->
        <div class="row img-wrap mb-5 mb-lg-10">
          <div class="col-12">
            <div class="row">
              <div class="mb-4 margin-lg-0 col-lg-6 order-lg-2">
                <a href="#" class="effect">
                  <img src="images/nature.jpg" alt="Loading" class="img-fluid">
                </a>
              </div>
              <div class="col-lg-5 mr-auto text-lg-right align-self-center order-lg-1">
                <h2 class="text-black">Nature</h2>
                <p class="mb-4">
                  Nature in India holds a special place in the hearts of its
                   people as a revered symbol of spirituality, culture and life.
                </p>
                <a href="#" class="btn btn-about">Read More</a>
              </div>
            </div>
          </div>
        </div>
        <!--------->
      </div>
    </section>
    <!--End of Welcome/About Section-->
    <!--Popular Places-->
    <section id="places">
      <div class="popular section-bg img-effect mt-5">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <div class="section-title text-center">
                <h1 class="text-white">Popular Places</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--------->
      <div class="all-image">
        <div class="container">
          <div class="row">
            <div class="col-xl-5 col-md-5">
              <div class="single-img">
                <div class="img-thumb">
                  <img src="images/gatewayofindia.jpg" alt="Loading">
                </div>
                <div class="img-hover">
                  <div class="title">
                    <h3>Gate Way of India, Mumbai</h3>
                  </div>
                </div>
              </div>
            </div>
            <!----->
            <div class="col-xl-7 col-md-7">
              <div class="single-img">
                <div class="img-thumb">
                  <img src="images/redfort.jpg" alt="Loading">
                </div>
                <div class="img-hover">
                  <div class="title">
                    <h3>Red Fort, Delhi</h3>
                  </div>
                </div>
              </div>
            </div>
            <!----->
            <div class="col-xl-4 col-md-6 col-lg-4">
              <div class="single-img">
                <div class="img-thumb">
                  <img src="images/amerfort.jpg" alt="Loading">
                </div>
                <div class="img-hover">
                  <div class="title">
                    <h3>Amer Fort, Rajasthan</h3>
                  </div>
                </div>
              </div>
            </div>
            <!----->
            <div class="col-xl-4 col-md-6 col-lg-4">
              <div class="single-img">
                <div class="img-thumb">
                  <img src="images/charminar.jpg" alt="Loading">
                </div>
                <div class="img-hover">
                  <div class="title">
                    <h3>Charminar, Hyderabad</h3>
                  </div>
                </div>
              </div>
            </div>
            <!----->
            <div class="col-xl-4 col-md-12 col-lg-4">
              <div class="single-img">
                <div class="img-thumb">
                  <img src="images/agrafort.jpg" alt="Loading">
                </div>
                <div class="img-hover">
                  <div class="title">
                    <h3>Agra Fort, Uttar Pradesh</h3>
                  </div>
                </div>
              </div>
            </div>
            <!----->
          </div>
        </div>
      </div>
    </section>
    <!--End of Popular Places-->
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <!--Services Section-->
    <section id="services" class="services section-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="section-title">
              <h2>Services We Provide</h2>
              <p>
                We provide a varity of services to our customers that includes Good
                 Food from top restaurants, Beach Resort in Goa, Mountain Climbing
                 in hilly states like Himanchal, Uttarakhand and others and lastly, 
                 Hot Air Balloon to enjoy the most in some of the best region of the country. 
              </p>
            </div>
          </div>
          <!-------->
          <div class="col-lg-8">
            <div class="row">
              <div class="col-md-6 d-flex align-items-stretch">
                <div class="icon-circle purple">
                  <div class="icon">
                    <i class="fas fa-drumstick-bite"></i>
                  </div>
                  <h4 class="text-white">Good Food</h4>
                  <p>Best food from top restaurents in the country</p>
                </div>
              </div>
              <!------->
              <div class="col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                <div class="icon-circle pink">
                  <div class="icon">
                    <i class="fas fa-umbrella-beach"></i>
                  </div>
                  <h4 class="text-white">Beach Resort</h4>
                  <p>Top Beach Resorts in Goa with every type facilities</p>
                </div>
              </div>
              <!------->
              <div class="col-md-6 d-flex align-items-stretch mt-4">
                <div class="icon-circle yellow">
                  <div class="icon">
                    <i class="fas fa-hiking"></i>
                  </div>
                  <h4 class="text-white">Mountain-Climbing</h4>
                  <p>Mountain Climbing in the hilly states of India like Himanchal Pradesh,
                    Uttarakhand, and many more
                  </p>
                </div>
              </div>
              <!------->
              <div class="col-md-6 d-flex align-items-stretch mt-4">
                <div class="icon-circle blue">
                  <div class="icon">
                    <i class="fas fa-mountain"></i>
                  </div>
                  <h4 class="text-white">Hot Air Balloon</h4>
                  <p>Hot Air Balloon at the best view in the country with guidance
                    of best experts
                  </p>
                </div>
              </div>
              <!------->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End of Services Section-->
    <!--Package Section-->
    <section class="package section-padding mt-3" id="blog">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-5">
            <div class="section-title text-center">
              <h2 class="py-3">Packages We Offer</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-xl-6">
            <div class="package-1">
              <img src="images/tp1.jpg" alt="" class="img-fluid">
              <div class="package-text">
                <p>
                  KASHMIR TOUR PACKAGE, 
                  Visit virgin beauty of kashmir.
                  Day excursion to URI, Dodpathri, Yusmarg, Daksum and Lolab.</p>
                <a href="#" class="btn-package p-2">View Details</a>
              </div>
            </div>
          </div>
          <!----->
          <div class="col-md-6 col-xl-6">
            <div class="package-1">
              <img src="images/tp2.jpg" alt="" class="img-fluid">
              <div class="package-text">
                <p>KERALA TOUR PACKAGE, Kickstart your Kerala trip package with a Kochi sightseeing journey.
                  Next, head over to Munnar and visit the local tea and spice plantations.</p>
                <a href="#" class="btn-package p-2">View Details</a>
              </div>
            </div>
          </div>
          <!----->
        </div>
      </div>
    </section>
    <!--End of Package Section-->
    <!--Historical Places Section-->
    <section class="mt-2">
      <div class="historical-places" id="history">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="section-title text-center mb-70">
                <h3 class="text-uppercase text-center">Historical Places</h3>
                <p class="text-center">India is rich in culture,traditions,heritage buildings, temples, forts and palaces. 
                  Famous Indian Monuments includes Old Churches of Goa ,The Taj Mahal, Qutab Minar of Delhi, Charminar, 
                  Red fort and Jantar mantar, these are also few most visited Heritage Sites in India.</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="single-dest">
                <div class="thumb">
                  <img src="images/tajmahal.jpg" class="img-fluid" alt="">
                  <a href="#" class="price">Rs.21000</a>
                </div>
                <div class="dest-info">
                  <a href="#">
                    <h3>Taj Mahal</h3>
                  </a>
                  <p>Agra, Uttar Pradesh</p>
                  <div class="rating d-flex justify-content-between">
                    <span class="d-flex justify-content-center align-items-center">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <a href="#">(10 Review)</a>
                    </span>
                    <div class="days">
                      <i class="fas fa-clock-o">
                        <a href="#">2 Days</a>
                      </i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-------->
            <div class="col-lg-4 col-md-6">
              <div class="single-dest">
                <div class="thumb">
                  <img src="images/goldentemple.jpg" class="img-fluid" alt="">
                  <a href="#" class="price">Rs.21000</a>
                </div>
                <div class="dest-info">
                  <a href="#">
                    <h3>Golden Temple</h3>
                  </a>
                  <p>Amritsar, Punjab</p>
                  <div class="rating d-flex justify-content-between">
                    <span class="d-flex justify-content-center align-items-center">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <a href="#">(10 Review)</a>
                    </span>
                    <div class="days">
                      <i class="fas fa-clock-o">
                        <a href="#">2 Days</a>
                      </i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-------->
            <div class="col-lg-4 col-md-6">
              <div class="single-dest">
                <div class="thumb">
                  <img src="images/indiagate.jpg" class="img-fluid" alt="">
                  <a href="#" class="price">Rs.21000</a>
                </div>
                <div class="dest-info">
                  <a href="#">
                    <h3>India Gate</h3>
                  </a>
                  <p>New Delhi</p>
                  <div class="rating d-flex justify-content-between">
                    <span class="d-flex justify-content-center align-items-center">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <a href="#">(10 Review)</a>
                    </span>
                    <div class="days">
                      <i class="fas fa-clock-o">
                        <a href="#">2 Days</a>
                      </i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-------->
            <div class="col-lg-4 col-md-6">
              <div class="single-dest">
                <div class="thumb">
                  <img src="images/qutubminar.jpg" class="img-fluid" alt="">
                  <a href="#" class="price">Rs.21000</a>
                </div>
                <div class="dest-info">
                  <a href="#">
                    <h3>Qutub Minar</h3>
                  </a>
                  <p>Delhi</p>
                  <div class="rating d-flex justify-content-between">
                    <span class="d-flex justify-content-center align-items-center">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <a href="#">(10 Review)</a>
                    </span>
                    <div class="days">
                      <i class="fas fa-clock-o">
                        <a href="#">2 Days</a>
                      </i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-------->
            <div class="col-lg-4 col-md-6">
              <div class="single-dest">
                <div class="thumb">
                  <img src="images/hawamahal.jpg" class="img-fluid" alt="">
                  <a href="#" class="price">Rs.21000</a>
                </div>
                <div class="dest-info">
                  <a href="#">
                    <h3>Hawa Mahal</h3>
                  </a>
                  <p>Jaipur, Rajasthan</p>
                  <div class="rating d-flex justify-content-between">
                    <span class="d-flex justify-content-center align-items-center">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <a href="#">(10 Review)</a>
                    </span>
                    <div class="days">
                      <i class="fas fa-clock-o">
                        <a href="#">2 Days</a>
                      </i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-------->
            <div class="col-lg-4 col-md-6">
              <div class="single-dest">
                <div class="thumb">
                  <img src="images/lotustemple.jpg" class="img-fluid" alt="">
                  <a href="#" class="price">Rs.21000</a>
                </div>
                <div class="dest-info">
                  <a href="#">
                    <h3>Lotus Temple</h3>
                  </a>
                  <p>Delhi</p>
                  <div class="rating d-flex justify-content-between">
                    <span class="d-flex justify-content-center align-items-center">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <a href="#">(10 Review)</a>
                    </span>
                    <div class="days">
                      <i class="fas fa-clock-o">
                        <a href="#">2 Days</a>
                      </i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-------->
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="btn-hist text-center">
                <div><a href="#" class="btn btn-hist">More Places</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End of Historical Places Section-->

    <!------------>


	<div class="contact" id="contact">
        <center><h1>Contact-Us</h1></center>
		<div class="contact_background" style="background-image:url(images/contact.png)"></div>

		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<div class="contact_image">
						
					</div>
				</div>
				<div class="col-lg-7">
					<div class="contact_form_container">
						<div class="contact_title">get in touch</div>
						<form action="/contact/store" id="contact_form" method="POST" class="contact_form">
							<?php echo csrf_field(); ?>
							<input type="text" id="contact_form_name" class="contact_form_name input_field" name="name" placeholder="Name">
							<?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
							<input type="text" id="contact_form_email" class="contact_form_email input_field" name="email" placeholder="E-mail">
							<?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
							<input type="text" id="contact_form_subject" class="contact_form_subject input_field" name="subject" placeholder="Subject">
							<?php $__errorArgs = ['subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
							<textarea id="contact_form_message" class="text_field contact_form_message" name="message" rows="4" placeholder="Message"></textarea>
							<?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="text-danger"><?php echo e($message); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
							<button type="submit" id="form_submit_button" class="form_submit_button button">send message<span></span><span></span><span></span></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Travelville</h2>
              <p>Travelville is the best travelling website with variety of options along with all the certified residential services in additional to its world class facilities giving maximum leisure and utmost travelling experience to the travellers.</p>
			  <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Information</h2>
              <ul class="list-unstyled">
                <li><a href="http://127.0.0.1:8000/about" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Service</a></li>
                <li><a href="#" class="py-2 d-block">Terms and Conditions</a></li>
                <li><a href="#" class="py-2 d-block">Become a partner</a></li>
                <li><a href="#" class="py-2 d-block">Best Price Guarantee</a></li>
                <li><a href="#" class="py-2 d-block">Privacy and Policy</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Customer Support</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">FAQ</a></li>
                <li><a href="#" class="py-2 d-block">Payment Option</a></li>
                <li><a href="#" class="py-2 d-block">Booking Tips</a></li>
                <li><a href="#" class="py-2 d-block">How it works</a></li>
                <li><a href="http://127.0.0.1:8000/contact" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+91 6283 581 193</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@travelville.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made by <i class="icon-heart" aria-hidden="true"></i> Devansh shah.
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
	<!-- Copyright -->


</div> 
<script type="text/javascript" src="<?php echo e(URL::asset('js/jquery-3.2.1.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(URL::asset('js/popper.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(URL::asset('js/bootstrap.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(URL::asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(URL::asset('plugins/easing/easing.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(URL::asset('js/custom.js')); ?>"></script>
</body>
</html><?php /**PATH G:\laravelproject\resources\views/travel.blade.php ENDPATH**/ ?>