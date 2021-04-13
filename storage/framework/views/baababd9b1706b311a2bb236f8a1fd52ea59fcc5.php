<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
<title>Advanced Hotel Booking</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Bus Ticket Reservation Widget Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="<?php echo e(URL::asset('js/jquery-1.11.0.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(URL::asset('js/jquery.seat-charts.js')); ?>"></script>
<link rel="stylesheet" href="<?php echo e(URL::asset('css/stylehotel.css')); ?>">                                   
<link rel="stylesheet" href="<?php echo e(URL::asset('css/jquery.seat-charts.css')); ?>"> 
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
<style>
    body{
	padding:0;
	margin:0;
    background:url(https://s-media-cache-ak0.pinimg.com/originals/b2/8b/2e/b28b2eb270fdab4226379656151b6c7f.jpg);
	background-repeat: no-repeat center;
    background-size: cover;
    -webkit-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
    -moz-background-size: cover;
	font-family: 'Open Sans', sans-serif !important;
}
</style>
</head>
<body>
<div class="content">
	<h1>Hotel Reservation</h1>
	<div class="main">
		<h2>Book Your Seat Now?</h2>
		<div class="wrapper">
			<div id="seat-map">
			</div>
			<div class="booking-details">
						<div id="legend"></div>
						<h3> Alloted Room (<span id="counter">0</span>):</h3>
						<ul id="selected-seats" class="scrollbar scrollbar1"></ul>
						Total: <b>$<span id="total" name="totalamount">0</span></b>
						<button class="checkout-button"><a href="http://127.0.0.1:8000/payment"> Pay Now</a></button>
			</div>
			<div class="clear"></div>
		</div>

		<script>
				var firstSeatLabel = 10;
			
				$(document).ready(function() {
					var $cart = $('#selected-seats'),
						$counter = $('#counter'),
						$total = $('#total'),
						sc = $('#seat-map').seatCharts({
						map: [
							'fffffeef',
							'feeffeee',
							'efeffeef',
							'eeeefefe',
							'efffeeef',
							'eeeefeff',
							'feefeeff',
							'fefefeee',
							'ffffffff',
						],
						seats: {
							f: {
								price   : 399,
								classes : 'first-class Air - conditioned', //your custom CSS class
								category: 'First Class'
							},
							e: {
								price   : 299,
								classes : 'economy-class Non-AC', //your custom CSS class
								category: 'Economy Class'
							}					
						
						},
						naming : {
							top : false,
							getLabel : function (character, row, column) {
								return firstSeatLabel++;
							},
						},
						legend : {
							node : $('#legend'),
							items : [
								[ 'f', 'available',   'First Class  Air - conditioned' ],
								[ 'e', 'available',   'Economy Class  Non-AC'],
								[ 'f', 'unavailable', 'Already Booked']
							]					
						},
						click: function () {
							if (this.status() == 'available') {
								//let's create a new <li> which we'll add to the cart items
								$('<li>'+this.data().category+' : Seat no '+this.settings.label+': <b>$'+this.data().price+'</b> <a href="#" class="cancel-cart-item">[cancel]</a></li>')
									.attr('id', 'cart-item-'+this.settings.id)
									.data('seatId', this.settings.id)
									.appendTo($cart);
								
								/*
								 * Lets update the counter and total
								 *
								 * .find function will not find the current seat, because it will change its stauts only after return
								 * 'selected'. This is why we have to add 1 to the length and the current seat price to the total.
								 */
								$counter.text(sc.find('selected').length+1);
								$total.text(recalculateTotal(sc)+this.data().price);
								
								return 'selected';
							} else if (this.status() == 'selected') {
								//update the counter
								$counter.text(sc.find('selected').length-1);
								//and total
								$total.text(recalculateTotal(sc)-this.data().price);
							
								//remove the item from our cart
								$('#cart-item-'+this.settings.id).remove();
							
								//seat has been vacated
								return 'available';
							} else if (this.status() == 'unavailable') {
								//seat has been already booked
								return 'unavailable';
							} else {
								return this.style();
							}
						}
					});

					//this will handle "[cancel]" link clicks
					$('#selected-seats').on('click', '.cancel-cart-item', function () {
						//let's just trigger Click event on the appropriate seat, so we don't have to repeat the logic here
						sc.get($(this).parents('li:first').data('seatId')).click();
					});

					//let's pretend some seats have already been booked
					sc.get(['1_2', '4_1', '7_1', '7_2']).status('unavailable');
			
			});

			function recalculateTotal(sc) {
				var total = 0;
			
				//basically find every selected seat and sum its price
				sc.find('selected').each(function () {
					total += this.data().price;
				});
				
				return total;
			}
		</script>
	</div>
</div>
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
	
<script type="text/javascript" src="<?php echo e(URL::asset('js/jquery.nicescroll.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(URL::asset('js/scripts.js')); ?>"></script>
</body>
</html>
<?php /**PATH G:\laravelproject\resources\views/hotelroom.blade.php ENDPATH**/ ?>