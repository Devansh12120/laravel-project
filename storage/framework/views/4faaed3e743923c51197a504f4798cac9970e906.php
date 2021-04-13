<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Travelville -The premium travelling website</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(URL::asset('tour/css/open-iconic-bootstrap.min.css')); ?>">                                   
    <link rel="stylesheet" href="<?php echo e(URL::asset('tour/css/animate.css')); ?>">                                   
    <link rel="stylesheet" href="<?php echo e(URL::asset('tour/css/owl.carousel.min.css')); ?>">                                   
    <link rel="stylesheet" href="<?php echo e(URL::asset('tour/css/owl.theme.default.min.css')); ?>">                                   
    <link rel="stylesheet" href="<?php echo e(URL::asset('tour/css/magnific-popup.css')); ?>">                                   
    <link rel="stylesheet" href="<?php echo e(URL::asset('tour/css/aos.css')); ?>">                                   
    <link rel="stylesheet" href="<?php echo e(URL::asset('tour/css/ionicons.min.css')); ?>">                                   
    <link rel="stylesheet" href="<?php echo e(URL::asset('tour/css/bootstrap-datepicker.css')); ?>">                                   
    <link rel="stylesheet" href="<?php echo e(URL::asset('tour/css/jquery.timepicker.css')); ?>">                                   
    <link rel="stylesheet" href="<?php echo e(URL::asset('tour/css/flaticon.css')); ?>">                                   
    <link rel="stylesheet" href="<?php echo e(URL::asset('tour/css/icomoon.css')); ?>">                                   
    <link rel="stylesheet" href="<?php echo e(URL::asset('tour/css/style.css')); ?>">                                   
    <!-- <link rel="stylesheet" href="<?php echo e(URL::asset('tour/')); ?>">                                   
    <link rel="stylesheet" href="<?php echo e(URL::asset('tour/')); ?>">                                   
    <link rel="stylesheet" href="<?php echo e(URL::asset('tour/')); ?>">                                    -->
  </head>
  <style>
	  body{
		  scroll-behavior: smooth;
	  }
  </style>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="tours">Travelville</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="http://127.0.0.1:8000/" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="http://127.0.0.1:8000/about " class="nav-link">About</a></li>
          <li class="nav-item"><a href="http://127.0.0.1:8000/" class="nav-link">Tour</a></li>
          <li class="nav-item"><a href="http://127.0.0.1:8000/hotel " class="nav-link">Hotels</a></li>
          <li class="nav-item"><a href="http://127.0.0.1:8000/blog " class="nav-link">Blog</a></li>
          <li class="nav-item"><a href="http://127.0.0.1:8000/contact " class="nav-link">Contact</a></li>
          <li class="nav-item cta"><a href="http://127.0.0.1:8000/contact " class="nav-link"><span>Add listing</span></a></li>
        </ul>
      </div>
    </div>
  </nav>  
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url('tour/images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>About</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">About Us</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row d-md-flex">
	    		<div class="col-md-6 ftco-animate img about-image" style="background-image: url(tour/images/about.jpg);">
	    		</div>
	    		<div class="col-md-6 ftco-animate p-md-5">
		    		<div class="row">
		          <div class="col-md-12 nav-link-wrap mb-5">
		            <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
		              <a class="nav-link active" id="v-pills-whatwedo-tab" data-toggle="pill" href="#v-pills-whatwedo" role="tab" aria-controls="v-pills-whatwedo" aria-selected="true">What we do</a>

		              <a class="nav-link" id="v-pills-mission-tab" data-toggle="pill" href="#v-pills-mission" role="tab" aria-controls="v-pills-mission" aria-selected="false">Our mission</a>

		              <a class="nav-link" id="v-pills-goal-tab" data-toggle="pill" href="#v-pills-goal" role="tab" aria-controls="v-pills-goal" aria-selected="false">Our goal</a>
		            </div>
		          </div>
		          <div class="col-md-12 d-flex align-items-center">
		            
		            <div class="tab-content ftco-animate" id="v-pills-tabContent">

		              <div class="tab-pane fade show active" id="v-pills-whatwedo" role="tabpanel" aria-labelledby="v-pills-whatwedo-tab">
		              	<div>
			                <h2 class="mb-4">Offering Reliable Hosting</h2>
			              	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
			                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
				            </div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-mission" role="tabpanel" aria-labelledby="v-pills-mission-tab">
		                <div>
			                <h2 class="mb-4">Exceptional Web Solutions</h2>
			              	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
			                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
				            </div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-goal" role="tabpanel" aria-labelledby="v-pills-goal-tab">
		                <div>
			                <h2 class="mb-4">Help Our Customer</h2>
			              	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
			                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
				            </div>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
		    </div>
    	</div>
    </section>

    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row justify-content-start mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate">
          	<span class="subheading">FAQS</span>
            <h2 class="mb-4"><strong>Frequently</strong> Ask Question</h2>
          </div>
        </div>  
    		<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div id="accordion">
    					<div class="row">
    						<div class="col-md-6">
    							<div class="card">
						        <div class="card-header">
										  <a class="card-link" data-toggle="collapse"  href="#menuone" aria-expanded="true" aria-controls="menuone">Must Have Travel Documents<span class="collapsed"><i class="icon-plus-circle"></i></span><span class="expanded"><i class="icon-minus-circle"></i></span></a>
						        </div>
						        <div id="menuone" class="collapse">
						          <div class="card-body">
                                      <p>One must possess a passport which is valid for minimum 6 months from the date of entry into India. Many countries have been included in the list of countries whose citizens are provided E-Visa facility provided they apply 72 hours in advance. Other nationals need to obtain Indian visa in advance to enter India.</p>
						          </div>
						        </div>
						      </div>

						      <div class="card">
						        <div class="card-header">
										  <a class="card-link" data-toggle="collapse"  href="#menutwo" aria-expanded="false" aria-controls="menutwo">What about Payment Terms ?<span class="collapsed"><i class="icon-plus-circle"></i></span><span class="expanded"><i class="icon-minus-circle"></i></span></a>
						        </div>
						        <div id="menutwo" class="collapse">
						          <div class="card-body">
                                      <p>We normally need an advance amount once we are able to confirm you arrangements for the tour. The amoutn depends on the services you may require for the tour. This can be paid through bank transfer (before arrival) credit card, traveller’s cheques or cash. We need balance payment before arrival. The exact terms will be given at the time of reservation.</p>
						          </div>
						        </div>
						      </div>

						      <div class="card">
						        <div class="card-header">
										  <a class="card-link" data-toggle="collapse"  href="#menu3" aria-expanded="false" aria-controls="menu3">Acknowledgement of hotels<span class="collapsed"><i class="icon-plus-circle"></i></span><span class="expanded"><i class="icon-minus-circle"></i></span></a>
						        </div>
						        <div id="menu3" class="collapse">
						          <div class="card-body">
                                      <p>Yes, we will send you a detailed list of hotels at the time of confirmation of our services and before asking you for advance payment.</p>
						          </div>
						        </div>
						      </div>
                              <div class="card">
						        <div class="card-header">
										  <a class="card-link" data-toggle="collapse"  href="#menu7" aria-expanded="false" aria-controls="menu3">Can I drink the water in the countries I visit?<span class="collapsed"><i class="icon-plus-circle"></i></span><span class="expanded"><i class="icon-minus-circle"></i></span></a>
						        </div>
						        <div id="menu7" class="collapse">
						          <div class="card-body">
                                      <p>In some destinations it may not be wise to drink the local water. For more details, you can find country-specific information in our fantastic Destination Pages, which can be found in the red menu bar at the top of our home page, or by going to the belo and then choosing the destination you are travelling to.</p>
						          </div>
						        </div>
						      </div>
                              
                              <div class="card">
						        <div class="card-header">
										  <a class="card-link" data-toggle="collapse"  href="#menu9" aria-expanded="false" aria-controls="menu3">Do you help with Visas?<span class="collapsed"><i class="icon-plus-circle"></i></span><span class="expanded"><i class="icon-minus-circle"></i></span></a>
						        </div>
						        <div id="menu9" class="collapse">
						          <div class="card-body">
                                      <p>Intrepid can’t assist in the actual application of visas, but you can do this through the embassy or with the support of a travel agent.</p>
						          </div>
						        </div>
						      </div>
                              
                              <div class="card">
						        <div class="card-header">
										  <a class="card-link" data-toggle="collapse"  href="#menu11" aria-expanded="false" aria-controls="menu3">How safe are my belongings whilst on the trip?<span class="collapsed"><i class="icon-plus-circle"></i></span><span class="expanded"><i class="icon-minus-circle"></i></span></a>
						        </div>
						        <div id="menu11" class="collapse">
						          <div class="card-body">
                                      <p>While we take all the precautions we can to make sure your belongings are safe, we are travelling to some exciting destinations that are sometimes home to some pretty skilled thieves. Travel insurance is a must and a lockable bag or money belt will always help too. </p>
						          </div>
						        </div>
						      </div>
    						</div>

    						<div class="col-md-6">
    							<div class="card">
						        <div class="card-header">
										  <a class="card-link" data-toggle="collapse"  href="#menu4" aria-expanded="false" aria-controls="menu4">Only All Inclusive Package Tours ?<span class="collapsed"><i class="icon-plus-circle"></i></span><span class="expanded"><i class="icon-minus-circle"></i></span></a>
						        </div>
						        <div id="menu4" class="collapse">
						          <div class="card-body">
                                      <p>We offer all inclusive package tours. but on request, we can also provide particular services only viz. hotel reservation, car / coach hire with driver, flight / train tickets, etc for those who do not want to buy entire services from us for any reason.</p>
						          </div>
						        </div>
						      </div>

						      <div class="card">
						        <div class="card-header">
										  <a class="card-link" data-toggle="collapse"  href="#menu5" aria-expanded="false" aria-controls="menu5">Do I Need Medical/travel Insurance ?<span class="collapsed"><i class="icon-plus-circle"></i></span><span class="expanded"><i class="icon-minus-circle"></i></span></a>
						        </div>
						        <div id="menu5" class="collapse">
						          <div class="card-body">
												<p>Yes. It is advisable that you buy a comprehensive medical / travel insurance in advance from your country before travelling to India.</p>
						          </div>
						        </div>
						      </div>

						      <div class="card">
						        <div class="card-header">
										  <a class="card-link" data-toggle="collapse"  href="#menu6" aria-expanded="false" aria-controls="menu6">What Star Rating Are Your Hotels ?<span class="collapsed"><i class="icon-plus-circle"></i></span><span class="expanded"><i class="icon-minus-circle"></i></span></a>
						        </div>
						        <div id="menu6" class="collapse">
						          <div class="card-body">
                                      <p>We provide minimum Standard category hotels which mean 3 star hotels, superior or First class of hotels are 4 star or equivalent and deluxe hotels which are 5 star or 5 star deluxe hotels. At few places, deluxe or first class hotels are not there and in such case, we shall provide best available hotels which may not confirm to deluxe or first class category. We also include heritage / palace and charming boutique hotels in our packages and can send you special cost for tours with hotels as per your choice.</p>
						          </div>
						        </div>
						      </div>
                              <div class="card">
						        <div class="card-header">
										  <a class="card-link" data-toggle="collapse"  href="#menu8" aria-expanded="false" aria-controls="menu3">Are your trips guaranteed to depart?<span class="collapsed"><i class="icon-plus-circle"></i></span><span class="expanded"><i class="icon-minus-circle"></i></span></a>
						        </div>
						        <div id="menu8" class="collapse">
						          <div class="card-body">
                                      <p>The vast majority of our small group adventures are guaranteed to depart. That means that once you book your trip it’s confirmed to run, regardless of how many other travellers have booked. You can easily tell which departures are guaranteed by looking for 'guaranteed departure' next to your chosen travel date.</p>
						          </div>
						        </div>
						      </div>
                              
                              <div class="card">
						        <div class="card-header">
										  <a class="card-link" data-toggle="collapse"  href="#menu10" aria-expanded="false" aria-controls="menu3">special dietary requirements<span class="collapsed"><i class="icon-plus-circle"></i></span><span class="expanded"><i class="icon-minus-circle"></i></span></a>
						        </div>
						        <div id="menu10" class="collapse">
						          <div class="card-body">
                                      <p>We will try our very hardest to accommodate all dietary requirements but in some out-of-the-way places it can be very difficult to guarantee. We will let you know if there are places on your itinerary where this is the case. Please let us know at the time of booking of any food requirements or allergies and we’ll pass the information onto your leader. It is also a great idea to bring a card with your dietary requirements written in the local language for those times you are eating away from the group.</p>
						          </div>
						        </div>
						      </div>
                              
                              <div class="card">
						        <div class="card-header">
										  <a class="card-link" data-toggle="collapse"  href="#menu12" aria-expanded="false" aria-controls="menu3">What will the food be like on my trip?<span class="collapsed"><i class="icon-plus-circle"></i></span><span class="expanded"><i class="icon-minus-circle"></i></span></a>
						        </div>
						        <div id="menu12" class="collapse">
						          <div class="card-body">
                                      <p>Food is one of the most exciting parts of travel. There may be some familiar fare but often you’ll be confronted with the new, interesting and downright weird of the culinary world but we like to think of it as an adventure for all the senses. In addition to this, our flexible itineraries often allow you to eat with the group or branch out on your own - this means you can eat to suit any budget or desire.</p>
						          </div>
						        </div>
						      </div>
    						</div>
    					</div>
				    </div>
    			</div>
    		</div>
    	</div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">dirEngine</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
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
                <li><a href="#" class="py-2 d-block">About</a></li>
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
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <script type="text/javascript" src="<?php echo e(URL::asset('tour/js/jquery.min.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(URL::asset('tour/js/jquery-migrate-3.0.1.min.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(URL::asset('tour/js/popper.min.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(URL::asset('tour/js/bootstrap.min.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(URL::asset('tour/js/jquery.easing.1.3.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(URL::asset('tour/js/jquery.waypoints.min.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(URL::asset('tour/js/jquery.stellar.min.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(URL::asset('tour/js/owl.carousel.min.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(URL::asset('tour/js/jquery.magnific-popup.min.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(URL::asset('tour/js/jquery.animateNumber.min.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(URL::asset('tour/js/aos.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(URL::asset('tour/js/bootstrap-datepicker.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(URL::asset('tour/js/jquery.timepicker.min.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(URL::asset('tour/js/scrollax.min.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(URL::asset('tour/js/google-map.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(URL::asset('tour/js/main.js')); ?>"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>

    
  </body>
</html><?php /**PATH G:\laravelproject\resources\views/about.blade.php ENDPATH**/ ?>