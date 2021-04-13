<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Travelville packages</title>
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
          <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
          <li class="nav-item"><a href="tour.html" class="nav-link">Tour</a></li>
          <li class="nav-item"><a href="hotel.html" class="nav-link">Hotels</a></li>
          <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
          <li class="nav-item cta"><a href="contact.html" class="nav-link"><span>Add listing</span></a></li>
        </ul>
      </div>
    </div>
  </nav>    
    <div class="hero-wrap js-fullheight" style="background-image: url('tour/images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><strong>Explore <br></strong> your amazing city</h1>
            <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Find great places to stay, eat, shop, or visit from local experts</p>
            <div class="block-17 my-4">
              <form action="" method="post" class="d-block d-flex">
                <div class="fields d-block d-flex">
                  <div class="textfield-search one-third">
                  	<input type="text" class="form-control" placeholder="Ex: food, service, hotel">
                  </div>
                  <div class="select-wrap one-third">
                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                    <select name="" id="" class="form-control" placeholder="Keyword search">
                      <option value="">Where</option>
                      <option value="">San Francisco USA</option>
                      <option value="">Berlin Germany</option>
                      <option value="">Lodon United Kingdom</option>
                      <option value="">Paris Italy</option>
                    </select>
                  </div>
                </div>
                <input type="submit" class="search-submit btn btn-primary" value="Search">  
              </form>
            </div>
            <p>Or browse the highlights</p>
            <p class="browse d-md-flex">
            	<span class="d-flex justify-content-md-center align-items-md-center"><a href="#food"><i class="flaticon-fork"></i>Restaurant</a></span>
            	<span class="d-flex justify-content-md-center align-items-md-center"><a href="#hotel"><i class="flaticon-hotel"></i>Hotel</a></span> 
            	<span class="d-flex justify-content-md-center align-items-md-center"><a href="#places"><i class="flaticon-meeting-point"></i>Places</a></span> 
            	<span class="d-flex justify-content-md-center align-items-md-	center"><a href="#"><i class="flaticon-shopping-bag"></i>Shopping</a></span>
            </p>
          </div>
        </div>
      </div>
    </div>
    <section class="ftco-section services-section bg-light">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-guarantee"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Best Price Guarantee</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-like"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Travellers Love Us</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-detective"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Best Travel Agent</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-support"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Our Dedicated Support</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>    
    <section class="ftco-section ftco-destination" id="places">
    	<div class="container">
    		<div class="row justify-content-start mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate">
          	<span class="subheading">Featured</span>
            <h2 class="mb-4"><strong>Featured</strong> Destination</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-12">
    				<div class="destination-slider owl-carousel ftco-animate">
    					<div class="item">
		    				<div class="destination">
		    					<a href="http://127.0.0.1:8000/d" class="img d-flex justify-content-center align-items-center" style="background-image: url(tour/images/destination-1.jpg);">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<h3><a href="http://127.0.0.1:8000/d">Paris, Italy</a></h3>
		    						<span class="listing">15 Listing</span>
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="destination">
		    					<a href="http://127.0.0.1:8000/d" class="img d-flex justify-content-center align-items-center" style="background-image: url(tour/images/destination-2.jpg);">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<h3><a href="http://127.0.0.1:8000/d">San Francisco, USA</a></h3>
		    						<span class="listing">20 Listing</span>
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="destination">
		    					<a href="http://127.0.0.1:8000/d" class="img d-flex justify-content-center align-items-center" style="background-image: url(tour/images/destination-3.jpg);">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<h3><a href="http://127.0.0.1:8000/d">Lodon, UK</a></h3>
		    						<span class="listing">10 Listing</span>
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="destination">
		    					<a href="http://127.0.0.1:8000/d" class="img d-flex justify-content-center align-items-center" style="background-image: url(tour/images/destination-4.jpg);">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<h3><a href="http://127.0.0.1:8000/d">Lion, Singapore</a></h3>
		    						<span class="listing">3 Listing</span>
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="destination">
		    					<a href="http://127.0.0.1:8000/d" class="img d-flex justify-content-center align-items-center" style="background-image: url(tour/images/destination-5.jpg);">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<h3><a href="http://127.0.0.1:8000/d">Australia</a></h3>
		    						<span class="listing">3 Listing</span>
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="destination">
		    					<a href="http://127.0.0.1:8000/d" class="img d-flex justify-content-center align-items-center" style="background-image: url(tour/images/destination-6.jpg);">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<h3><a href="http://127.0.0.1:8000/d">Paris, Italy</a></h3>
		    						<span class="listing">3 Listing</span>
		    					</div>
		    				</div>
	    				</div>
						<div class="item">
		    				<div class="destination">
		    					<a href="http://127.0.0.1:8000/d" class="img d-flex justify-content-center align-items-center" style="background-image: url(tour/images/Miami.jpg);">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<h3><a href="http://127.0.0.1:8000/d">Miami, US</a></h3>
		    						<span class="listing">15 Listing</span>
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="destination">
		    					<a href="http://127.0.0.1:8000/d" class="img d-flex justify-content-center align-items-center" style="background-image: url(tour/images/Hong.jpg);">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<h3><a href="http://127.0.0.1:8000/d">Hong Kong, China</a></h3>
		    						<span class="listing">20 Listing</span>
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="destination">
		    					<a href="http://127.0.0.1:8000/d" class="img d-flex justify-content-center align-items-center" style="background-image: url(tour/images/Budapest.jpg);">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<h3><a href="http://127.0.0.1:8000/d">Budapest, Hungary</a></h3>
		    						<span class="listing">10 Listing</span>
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="destination">
		    					<a href="http://127.0.0.1:8000/d" class="img d-flex justify-content-center align-items-center" style="background-image: url(tour/images/Singapore.jpg);">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<h3><a href="http://127.0.0.1:8000/d">Singapore</a></h3>
		    						<span class="listing">3 Listing</span>
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="destination">
		    					<a href="http://127.0.0.1:8000/d" class="img d-flex justify-content-center align-items-center" style="background-image: url(tour/images/Istanbul.jpg);">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<h3><a href="http://127.0.0.1:8000/d">Istambul</a></h3>
		    						<span class="listing">3 Listing</span>
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="destination">
		    					<a href="http://127.0.0.1:8000/d" class="img d-flex justify-content-center align-items-center" style="background-image: url(tour/images/Vegas.jpg);">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<h3><a href="http://127.0.0.1:8000/d">Las Vegas, England</a></h3>
		    						<span class="listing">3 Listing</span>
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
          				<span class="subheading">Special Offers</span>
            			<h2 class="mb-4"><strong>Top</strong> Tour Packages</h2>
          			</div>
        		</div>    		
    		</div>
    	<div class="container-fluid">
    		<div class="row">
				<div class=" destination-slider owl-carousel ftco-animate">
				<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="destination">
						<div class="item"></div>
    					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(tour/images/destination-1.jpg);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="#">Paris, Italy</a></h3>
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
	    							<span class="price">$259</span>
    							</div>
    						</div>
    						<p>Far far away, behind the word mountains, far from the countries</p>
    						<p class="days"><span>2 days 3 nights</span></p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="icon-map-o"></i> San Franciso, CA</span> 
    							<span class="ml-auto"><a href="#">Discover</a></span>
    						</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="destination">
    					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(tour/images/destination-2.jpg);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="#">Paris, Italy</a></h3>
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
	    							<span class="price">$299</span>
    							</div>
    						</div>
    						<p>Far far away, behind the word mountains, far from the countries</p>
    						<p class="days"><span>2 days 3 nights</span></p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="icon-map-o"></i> San Franciso, CA</span> 
    							<span class="ml-auto"><a href="#">Discover</a></span>
    						</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="destination">
    					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(tour/images/destination-3.jpg);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="#">Paris, Italy</a></h3>
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
	    							<span class="price">$399</span>
    							</div>
    						</div>
    						<p>Far far away, behind the word mountains, far from the countries</p>
    						<p class="days"><span>2 days 3 nights</span></p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="icon-map-o"></i> San Franciso, CA</span> 
    							<span class="ml-auto"><a href="#">Discover</a></span>
    						</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="destination">
    					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(tour/images/destination-4.jpg);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="#">Paris, Italy</a></h3>
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
	    							<span class="price">$359</span>
    							</div>
    						</div>
    						<p>Far far away, behind the word mountains, far from the countries</p>
    						<p class="days"><span>2 days 3 nights</span></p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="icon-map-o"></i> San Franciso, CA</span> 
    							<span class="ml-auto"><a href="#">Discover</a></span>
    						</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="destination">
    					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(tour/images/destination-5.jpg);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="#">Paris, Italy</a></h3>
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
	    							<span class="price">$379</span>
    							</div>
    						</div>
    						<p>Far far away, behind the word mountains, far from the countries</p>
    						<p class="days"><span>2 days 3 nights</span></p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="icon-map-o"></i> San Franciso, CA</span> 
    							<span class="ml-auto"><a href="#">Discover</a></span>
    						</p>
    					</div>
    				</div>
    			</div>
				<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="destination">
    					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(tour/images/Budapest.jpg);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="#">Budapest, Hungary</a></h3>
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
	    							<span class="price">$449</span>
    							</div>
    						</div>
    						<p>Far far away, behind the word mountains, far from the countries</p>
    						<p class="days"><span>4 days 3 nights</span></p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="icon-map-o"></i>Budapest, Hungary</span> 
    							<span class="ml-auto"><a href="#">Discover</a></span>
    						</p>
    					</div>
    				</div>
    			</div>
				<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="destination">
    					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(tour/images/Hong.jpg);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="#">Hong Cong, China </a></h3>
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
	    							<span class="price">$329</span>
    							</div>
    						</div>
    						<p>Far far away, behind the word mountains, far from the countries</p>
    						<p class="days"><span>4 days 3 nights</span></p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="icon-map-o"></i>Hong Cong, China</span> 
    							<span class="ml-auto"><a href="#">Discover</a></span>
    						</p>
    					</div>
    				</div>
    			</div>				
				<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="destination">
    					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(tour/images/london.jpg);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="#">London, England</a></h3>
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
	    							<span class="price">$359</span>
    							</div>
    						</div>
    						<p>Far far away, behind the word mountains, far from the countries</p>
    						<p class="days"><span>4 days 3 nights</span></p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="icon-map-o"></i>London, England</span> 
    							<span class="ml-auto"><a href="#">Discover</a></span>
    						</p>
    					</div>
    				</div>
    			</div>
				<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="destination">
    					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(tour/images/Miami.jpg);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="#">Miami</a></h3>
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
	    							<span class="price">$399</span>
    							</div>
    						</div>
    						<p>Far far away, behind the word mountains, far from the countries</p>
    						<p class="days"><span>4 days 3 nights</span></p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="icon-map-o"></i>Miami </span> 
    							<span class="ml-auto"><a href="#">Discover</a></span>
    						</p>
    					</div>
    				</div>
    			</div>				
				<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="destination">
    					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(tour/images/Singapore.jpg);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="#">Tanjong Pagar GRC, Singapore </a></h3>
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
	    							<span class="price">$299</span>
    							</div>
    						</div>
    						<p>Far far away, behind the word mountains, far from the countries</p>
    						<p class="days"><span>4 days 3 nights</span></p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="icon-map-o"></i>Tanjong Pagar GRC, Singapore </span> 
    							<span class="ml-auto"><a href="#">Discover</a></span>
    						</p>
    					</div>
    				</div>
    			</div>
			</div>
   		</div>
    	
    </section>

    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(tour/images/bg_1.jpg);">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-4">Some fun facts</h2>
            <span class="subheading">More than 100,000 websites hosted</span>
          </div>
        </div>
    		<div class="row justify-content-center">
    			<div class="col-md-10">
		    		<div class="row">
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="100000">0</strong>
		                <span>Happy Customers</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="40000">0</strong>
		                <span>Destination Places</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="87000">0</strong>
		                <span>Hotels</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="56400">0</strong>
		                <span>Restaurant</span>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>


    <section class="ftco-section" id="hotel">
    	<div class="container">
				<div class="row justify-content-start mb-5 pb-3">
          			<div class="col-md-7 heading-section ftco-animate">
          				<span class="subheading">Special Offers</span>
            			<h2 class="mb-4"><strong>Popular</strong> Hotels &amp; Rooms</h2>
          			</div>
        		</div>    		
    		</div>
    	<div class="container-fluid">
    		<div class="row">
				<div class=" destination-slider owl-carousel ftco-animate">
					<div class="col-sm col-md-6 col-lg ftco-animate">
						<div class="destination">
							<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(tour/images/hotel-1.jpg);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<div class="d-flex">
									<div class="one">
										<h3><a href="#">Hotel, Italy</a></h3>
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
									<span class="ml-auto"><a href="#">Book</a></span>
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm col-md-6 col-lg ftco-animate">
						<div class="destination">
							<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(tour/images/hotel-2.jpg);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<div class="d-flex">
									<div class="one">
										<h3><a href="#">Hotel, Italy</a></h3>
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
									<span class="ml-auto"><a href="#">Book </a></span>
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm col-md-6 col-lg ftco-animate">
						<div class="destination">
							<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(tour/images/hotel-3.jpg);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<div class="d-flex">
									<div class="one">
										<h3><a href="#">Hotel, Italy</a></h3>
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
									<span class="ml-auto"><a href="#">Book </a></span>
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm col-md-6 col-lg ftco-animate">
						<div class="destination">
							<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(tour/images/hotel-4.jpg);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<div class="d-flex">
									<div class="one">
										<h3><a href="#">Hotel, Italy</a></h3>
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
									<span class="ml-auto"><a href="#">Book  </a></span>
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm col-md-6 col-lg ftco-animate">
						<div class="destination">
							<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(tour/images/hotel-5.jpg);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<div class="d-flex">
									<div class="one">
										<h3><a href="#">Hotel, Italy</a></h3>
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
									<span class="ml-auto"><a href="#">Book </a></span>
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm col-md-6 col-lg ftco-animate">
						<div class="destination">
							<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(tour/images/h7.jfif);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<div class="d-flex">
									<div class="one">
										<h3><a href="#">Hotel, Italy</a></h3>
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
									<span class="ml-auto"><a href="#">Book </a></span>
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm col-md-6 col-lg ftco-animate">
						<div class="destination">
							<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(tour/images/h1.jfif);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<div class="d-flex">
									<div class="one">
										<h3><a href="#">Hotel, Italy</a></h3>
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
									<span class="ml-auto"><a href="#">Book </a></span>
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm col-md-6 col-lg ftco-animate">
						<div class="destination">
							<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(tour/images/h2.jfif);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<div class="d-flex">
									<div class="one">
										<h3><a href="#">Hotel, Italy</a></h3>
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
									<span class="ml-auto"><a href="#">Book </a></span>
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm col-md-6 col-lg ftco-animate">
						<div class="destination">
							<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(tour/images/h3.jfif);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<div class="d-flex">
									<div class="one">
										<h3><a href="#">Hotel, Italy</a></h3>
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
									<span class="ml-auto"><a href="#">Book </a></span>
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm col-md-6 col-lg ftco-animate">
						<div class="destination">
							<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(tour/images/h4.jfif);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<div class="d-flex">
									<div class="one">
										<h3><a href="#">Hotel, Italy</a></h3>
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
									<span class="ml-auto"><a href="#">Book </a></span>
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm col-md-6 col-lg ftco-animate">
						<div class="destination">
							<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(tour/images/h5.jfif);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<div class="d-flex">
									<div class="one">
										<h3><a href="#">Hotel, Italy</a></h3>
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
									<span class="ml-auto"><a href="#">Book </a></span>
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm col-md-6 col-lg ftco-animate">
						<div class="destination">
							<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(tour/images/h6.jfif);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<div class="d-flex">
									<div class="one">
										<h3><a href="#">Hotel, Italy</a></h3>
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
									<span class="ml-auto"><a href="#">Book </a></span>
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm col-md-6 col-lg ftco-animate">
						<div class="destination">
							<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(tour/images/h7.jfif);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<div class="d-flex">
									<div class="one">
										<h3><a href="#">Hotel, Italy</a></h3>
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
									<span class="ml-auto"><a href="#">Book </a></span>
								</p>
							</div>
						</div>
					</div>
					
    			</div>
			</div>
    	</div>
    </section>

    <section class="ftco-section" id="food">
    	<div class="container">
				<div class="row justify-content-start mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate">
          	<span class="subheading">Special Offers</span>
            <h2 class="mb-4"><strong>Popular</strong> Restaurants</h2>
          </div>
        </div>    		
    		<div class="row">
			<div class=" destination-slider owl-carousel ftco-animate">
					<div class="col-sm col-md-6 col-lg ftco-animate">
						<div class="destination">
							<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(tour/images/restaurant-1.jpg);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<h3><a href="#">Luxury Restaurant</a></h3>
								<p class="rate">
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star-o"></i>
									<span>8 Rating</span>
								</p>
								<p>Far far away, behind the word mountains, far from the countries</p>
								<hr>
								<p class="bottom-area d-flex">
									<span><i class="icon-map-o"></i> San Franciso, CA</span> 
									<span class="ml-auto"><a href="#">Discover</a></span>
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm col-md-6 col-lg ftco-animate">
						<div class="destination">
							<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(tour/images/restaurant-2.jpg);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<h3><a href="#">Luxury Restaurant</a></h3>
								<p class="rate">
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star-o"></i>
									<span>8 Rating</span>
								</p>
								<p>Far far away, behind the word mountains, far from the countries</p>
								<hr>
								<p class="bottom-area d-flex">
									<span><i class="icon-map-o"></i> San Franciso, CA</span> 
									<span class="ml-auto"><a href="#">Book  </a></span>
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm col-md-6 col-lg ftco-animate">
						<div class="destination">
							<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(tour/images/restaurant-3.jpg);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<h3><a href="#">Luxury Restaurant</a></h3>
								<p class="rate">
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star-o"></i>
									<span>8 Rating</span>
								</p>
								<p>Far far away, behind the word mountains, far from the countries</p>
								<hr>
								<p class="bottom-area d-flex">
									<span><i class="icon-map-o"></i> San Franciso, CA</span> 
									<span class="ml-auto"><a href="#">Book  </a></span>
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm col-md-6 col-lg ftco-animate">
						<div class="destination">
							<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(tour/images/restaurant-4.jpg);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<h3><a href="#">Luxury Restaurant</a></h3>
								<p class="rate">
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star-o"></i>
									<span>8 Rating</span>
								</p>
								<p>Far far away, behind the word mountains, far from the countries</p>
								<hr>
								<p class="bottom-area d-flex">
									<span><i class="icon-map-o"></i> San Franciso, CA</span> 
									<span class="ml-auto"><a href="#">Book  </a></span>
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm col-md-6 col-lg ftco-animate">
						<div class="destination">
							<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxwHwjjdZrVCJUuuUK2EIVBFRm5Bg4sGUUxQ&usqp=CAU);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<h3><a href="#">Luxury Restaurant</a></h3>
								<p class="rate">
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star-o"></i>
									<span>8 Rating</span>
								</p>
								<p>Far far away, behind the word mountains, far from the countries</p>
								<hr>
								<p class="bottom-area d-flex">
									<span><i class="icon-map-o"></i> San Franciso, CA</span> 
									<span class="ml-auto"><a href="#">Book  </a></span>
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm col-md-6 col-lg ftco-animate">
						<div class="destination">
							<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(data:image/jpeg;base64,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);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<h3><a href="#">Luxury Restaurant</a></h3>
								<p class="rate">
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star-o"></i>
									<span>8 Rating</span>
								</p>
								<p>Far far away, behind the word mountains, far from the countries</p>
								<hr>
								<p class="bottom-area d-flex">
									<span><i class="icon-map-o"></i> San Franciso, CA</span> 
									<span class="ml-auto"><a href="#">Book  </a></span>
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm col-md-6 col-lg ftco-animate">
						<div class="destination">
							<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(data:image/jpeg;base64,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);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<h3><a href="#">Luxury Restaurant</a></h3>
								<p class="rate">
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star-o"></i>
									<span>8 Rating</span>
								</p>
								<p>Far far away, behind the word mountains, far from the countries</p>
								<hr>
								<p class="bottom-area d-flex">
									<span><i class="icon-map-o"></i> San Franciso, CA</span> 
									<span class="ml-auto"><a href="#">Book  </a></span>
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm col-md-6 col-lg ftco-animate">
						<div class="destination">
							<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTp7tVEDWQdYk8PMjLQQBzNE_0wRpMzKTP6YQ&usqp=CAU);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<h3><a href="#">Luxury Restaurant</a></h3>
								<p class="rate">
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star-o"></i>
									<span>8 Rating</span>
								</p>
								<p>Far far away, behind the word mountains, far from the countries</p>
								<hr>
								<p class="bottom-area d-flex">
									<span><i class="icon-map-o"></i> San Franciso, CA</span> 
									<span class="ml-auto"><a href="#">Book</a></span>
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm col-md-6 col-lg ftco-animate">
						<div class="destination">
							<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRj-q-MQLDN5uYmbUnGbA8PdpGSYgSF22xH6A&usqp=CAU);">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<h3><a href="#">Luxury Restaurant</a></h3>
								<p class="rate">
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star-o"></i>
									<span>8 Rating</span>
								</p>
								<p>Far far away, behind the word mountains, far from the countries</p>
								<hr>
								<p class="bottom-area d-flex">
									<span><i class="icon-map-o"></i> San Franciso, CA</span> 
									<span class="ml-auto"><a href="#">Book</a></span>
								</p>
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
            <span class="subheading">Recent Blog</span>
            <h2><strong>Tips</strong> &amp; Articles</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('tour/images/image_1.jpg');">
              </a>
              <div class="text p-4 d-block">
              	<span class="tag">Tips, Travel</span>
                <h3 class="heading mt-3"><a href="#">8 Best homestay in Philippines that you don't miss out</a></h3>
                <div class="meta mb-3">
                  <div><a href="#">August 12, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('tour/images/image_2.jpg');">
              </a>
              <div class="text p-4">
              	<span class="tag">Culture</span>
                <h3 class="heading mt-3"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                <div class="meta mb-3">
                  <div><a href="#">August 12, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('tour/images/image_3.jpg');">
              </a>
              <div class="text p-4">
              	<span class="tag">Tips, Travel</span>
                <h3 class="heading mt-3"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                <div class="meta mb-3">
                  <div><a href="#">August 12, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('tour/images/image_4.jpg');">
              </a>
              <div class="text p-4">
              	<span class="tag">Tips, Travel</span>
                <h3 class="heading mt-3"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                <div class="meta mb-3">
                  <div><a href="#">August 12, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
		
	<section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>Subcribe to our Newsletter</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
              <div class="row d-flex justify-content-center mt-5">
                <div class="col-md-8">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                  </form>
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
</html><?php /**PATH G:\laravelproject\resources\views/tours.blade.php ENDPATH**/ ?>