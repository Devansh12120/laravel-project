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
  </head>
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
    
    <div class="hero-wrap js-fullheight" style="background-image: url('tour/images/bg_5.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Hotel</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Hotels</h1>
          </div>
        </div>
      </div>
    </div>


    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
        	<div class="col-lg-3 sidebar">
        		<div class="sidebar-wrap bg-light ftco-animate">
        			<h3 class="heading mb-4">Find City</h3>
        			<form action="#">
        				<div class="fields">
		              <div class="form-group">
		                <input type="text" class="form-control" placeholder="Destination, City">
		              </div>
		              <div class="form-group">
		                <div class="select-wrap one-third">
	                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                    <select name="" id="" class="form-control" placeholder="Keyword search">
	                      <option value="">Select Location</option>
	                      <option value="">San Francisco USA</option>
	                      <option value="">Berlin Germany</option>
	                      <option value="">Lodon United Kingdom</option>
	                      <option value="">Paris Italy</option>
	                    </select>
	                  </div>
		              </div>
		              <div class="form-group">
		                <input type="text" id="checkin_date" class="form-control" placeholder="Date from">
		              </div>
		              <div class="form-group">
		                <input type="text" id="checkin_date" class="form-control" placeholder="Date to">
		              </div>
		              <div class="form-group">
		              	<div class="range-slider">
		              		<span>
										    <input type="number" value="25000" min="0" max="120000"/>	-
										    <input type="number" value="50000" min="0" max="120000"/>
										  </span>
										  <input value="1000" min="0" max="120000" step="500" type="range"/>
										  <input value="50000" min="0" max="120000" step="500" type="range"/>
										  </svg>
										</div>
		              </div>
		              <div class="form-group">
		                <input type="submit" value="Search" class="btn btn-primary py-3 px-5">
		              </div>
		            </div>
	            </form>
        		</div>
        		<div class="sidebar-wrap bg-light ftco-animate">
        			<h3 class="heading mb-4">Star Rating</h3>
        			<form method="post" class="star-rating">
							  <div class="form-check">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">
										<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></p>
									</label>
							  </div>
							  <div class="form-check">
						      <input type="checkbox" class="form-check-input" id="exampleCheck1">
						      <label class="form-check-label" for="exampleCheck1">
						    	   <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i></span></p>
						      </label>
							  </div>
							  <div class="form-check">
						      <input type="checkbox" class="form-check-input" id="exampleCheck1">
						      <label class="form-check-label" for="exampleCheck1">
						      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
						     </label>
							  </div>
							  <div class="form-check">
							    <input type="checkbox" class="form-check-input" id="exampleCheck1">
						      <label class="form-check-label" for="exampleCheck1">
						      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
						      </label>
							  </div>
							  <div class="form-check">
						      <input type="checkbox" class="form-check-input" id="exampleCheck1">
						      <label class="form-check-label" for="exampleCheck1">
						      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
							    </label>
							  </div>
							</form>
        		</div>
          </div>
          <div class="col-lg-9">
          	<div class="row">
          		<div class="col-md-4 ftco-animate">
		    				<div class="destination">
		    					<a href="hotel-single.html" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(data:image/jpeg;base64,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);">
		    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<div class="d-flex">
		    							<div class="one">
				    						<h3><a href="hotel-single.html">Hotel, Italy</a></h3>
				    						<p class="rate">
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star-o"></i>
				    							<span>8 Rating</span>
				    						</p>
			    						</div>
			    						<div class="two">
			    							<span class="price per-price">$40<br><small>/night</small></span>
		    							</div>
		    						</div>
		    						<p>Far far away, behind the word mountains, far from the countries</p>
		    						<hr>
		    						<p class="bottom-area d-flex">
		    							<span><i class="icon-map-o"></i> Miami, Fl</span> 
		    							<span class="ml-auto"><a href="#">Book Now</a></span>
		    						</p>
		    					</div>
		    				</div>
		    			</div>
		    			<div class="col-md-4 ftco-animate">
		    				<div class="destination">
		    					<a href="hotel-single.html" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQk9mLpOlFgLqZpiwRyoRO_tSkCmNboLNaZww&usqp=CAU);">
		    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<div class="d-flex">
		    							<div class="one">
				    						<h3><a href="hotel-single.html">Hotel, Italy</a></h3>
				    						<p class="rate">
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star-o"></i>
				    							<span>8 Rating</span>
				    						</p>
			    						</div>
			    						<div class="two">
			    							<span class="price per-price">$40<br><small>/night</small></span>
		    							</div>
		    						</div>
		    						<p>Far far away, behind the word mountains, far from the countries</p>
		    						<hr>
		    						<p class="bottom-area d-flex">
		    							<span><i class="icon-map-o"></i> Miami, Fl</span> 
		    							<span class="ml-auto"><a href="#">Book Now</a></span>
		    						</p>
		    					</div>
		    				</div>
		    			</div>
		    			<div class="col-md-4 ftco-animate">
		    				<div class="destination">
		    					<a href="hotel-single.html" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTmWTsfKQtDEU7zuRB2dZRLbStOQaHuEAdWXw&usqp=CAU);">
		    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<div class="d-flex">
		    							<div class="one">
				    						<h3><a href="hotel-single.html">Hotel, Italy</a></h3>
				    						<p class="rate">
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star-o"></i>
				    							<span>8 Rating</span>
				    						</p>
			    						</div>
			    						<div class="two">
			    							<span class="price per-price">$40<br><small>/night</small></span>
		    							</div>
		    						</div>
		    						<p>Far far away, behind the word mountains, far from the countries</p>
		    						<hr>
		    						<p class="bottom-area d-flex">
		    							<span><i class="icon-map-o"></i> Miami, Fl</span> 
		    							<span class="ml-auto"><a href="#">Book Now</a></span>
		    						</p>
		    					</div>
		    				</div>
		    			</div>
		    			<div class="col-md-4 ftco-animate">
		    				<div class="destination">
		    					<a href="hotel-single.html" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSGZVKfq43fATolMBcEMiFk9ug8sxFMhuwIow&usqp=CAU);">
		    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<div class="d-flex">
		    							<div class="one">
				    						<h3><a href="hotel-single.html">Hotel, Italy</a></h3>
				    						<p class="rate">
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star-o"></i>
				    							<span>8 Rating</span>
				    						</p>
			    						</div>
			    						<div class="two">
			    							<span class="price per-price">$40<br><small>/night</small></span>
		    							</div>
		    						</div>
		    						<p>Far far away, behind the word mountains, far from the countries</p>
		    						<hr>
		    						<p class="bottom-area d-flex">
		    							<span><i class="icon-map-o"></i> Miami, Fl</span> 
		    							<span class="ml-auto"><a href="#">Book Now</a></span>
		    						</p>
		    					</div>
		    				</div>
		    			</div>
		    			<div class="col-md-4 ftco-animate">
		    				<div class="destination">
		    					<a href="hotel-single.html" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT8isCobLAjEfcnBz24E_gVPSW6B1TrxETrxA&usqp=CAU);">
		    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<div class="d-flex">
		    							<div class="one">
				    						<h3><a href="hotel-single.html">Hotel, Italy</a></h3>
				    						<p class="rate">
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star-o"></i>
				    							<span>8 Rating</span>
				    						</p>
			    						</div>
			    						<div class="two">
			    							<span class="price per-price">$40<br><small>/night</small></span>
		    							</div>
		    						</div>
		    						<p>Far far away, behind the word mountains, far from the countries</p>
		    						<hr>
		    						<p class="bottom-area d-flex">
		    							<span><i class="icon-map-o"></i> Miami, Fl</span> 
		    							<span class="ml-auto"><a href="#">Book Now</a></span>
		    						</p>
		    					</div>
		    				</div>
		    			</div>
		    			<div class="col-md-4 ftco-animate">
		    				<div class="destination">
		    					<a href="hotel-single.html" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQCYgJpMAcj3oAO9GjdrskG2dleBtTgA9v0yg&usqp=CAU);">
		    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<div class="d-flex">
		    							<div class="one">
				    						<h3><a href="hotel-single.html">Hotel, Italy</a></h3>
				    						<p class="rate">
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star"></i>
				    							<i class="icon-star-o"></i>
				    							<span>8 Rating</span>
				    						</p>
			    						</div>
			    						<div class="two">
			    							<span class="price per-price">$40<br><small>/night</small></span>
		    							</div>
		    						</div>
		    						<p>Far far away, behind the word mountains, far from the countries</p>
		    						<hr>
		    						<p class="bottom-area d-flex">
		    							<span><i class="icon-map-o"></i> Miami, Fl</span> 
		    							<span class="ml-auto"><a href="#">Book Now</a></span>
		    						</p>
		    					</div>
		    				</div>
		    			</div>
          	</div>
          	<div class="row mt-5">
		          <div class="col text-center">
		            <div class="block-27">
		              <ul>
		                
		                <li><a href="http://127.0.0.1:8000/hotel">1</a></li>
		                <li><a href="http://127.0.0.1:8000/hotel2">2</a></li>
		                <li class="active"><span>3</span></li>
		                
		              </ul>
		            </div>
		          </div>
		        </div>
          </div> <!-- .col-md-8 -->
        </div>
      </div>
    </section> <!-- .section -->

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Travelville</h2>
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
</html><?php /**PATH G:\laravelproject\resources\views/hotel3.blade.php ENDPATH**/ ?>