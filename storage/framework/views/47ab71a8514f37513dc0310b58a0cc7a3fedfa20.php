<!DOCTYPE html>
<html lang="en">
  <head>
    <title>trainville -The premium trainling website</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
  <style>
    
    .icon{
      color:black;
    }
	.fly{
		background-color:lightblue;
		width:100%;
		height:100%;
	}
	.fa{

		margin:10px;
		color:black;
	}
  </style>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="tours">trainville</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="http://127.0.0.1:8000/index" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="http://127.0.0.1:8000/about " class="nav-link">About</a></li>
          <li class="nav-item"><a href="http://127.0.0.1:8000/index" class="nav-link">Tour</a></li>
          <li class="nav-item"><a href="http://127.0.0.1:8000/hotel " class="nav-link">Hotels</a></li>
          <li class="nav-item"><a href="http://127.0.0.1:8000/blog " class="nav-link">Blog</a></li>
          <li class="nav-item"><a href="http://127.0.0.1:8000/contact " class="nav-link">Contact</a></li>
          <li class="nav-item cta"><a href="http://127.0.0.1:8000/contact " class="nav-link"><span>Add listing</span></a></li>
        </ul>
      </div>
    </div>
  </nav>  
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url('images/train.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">train Ticket</h1>
          </div>
        </div>
      </div>
    </div>



    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <td>Id</td>
                <td>Train name</td>
                <td>Train number</td>
                <td>Ticket number</td>
                <td>Seat number</td>
                <td>Class</td>
                <td>Type</td>
                <td>Boarding time</td>
                <td>Departure time</td>
                <td>amount</td>
				<td>Checkout</td>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $trains; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $train): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($train->id); ?></td>
                <td><?php echo e($train->train_name); ?></td>
                <td><?php echo e($train->train_number); ?></td>
                <td><?php echo e($train->ticket_number); ?></td>
                <td><?php echo e($train->seat_number); ?></td>
                <td><?php echo e($train->class); ?></td>
                <td><?php echo e($train->type); ?></td>
                <td><?php echo e($train->boarding_time); ?></td>
                <td><?php echo e($train->departure_time); ?></td>
                <td><?php echo e($train->amount); ?></td>
				<td><a href="http://127.0.0.1:8000/train"><button class="fly"><i class="fa fa-train" aria-hidden="true"></i></button></a></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>


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
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="#" target="_blank">Devansh Shah</a>
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
</html>
<?php /**PATH G:\laravelproject\resources\views/choosetrain.blade.php ENDPATH**/ ?>