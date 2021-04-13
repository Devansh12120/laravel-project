<!DOCTYPE html>
<html>
<head>
<title>Train Ticket Reservation</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Bus Ticket Reservation Widget Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="<?php echo e(URL::asset('js/jquery-1.11.0.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(URL::asset('js/jquery.seat-charts.js')); ?>"></script>
<link rel="stylesheet" href="<?php echo e(URL::asset('css/styletrain.css')); ?>">                                   
<link rel="stylesheet" href="<?php echo e(URL::asset('css/jquery.seat-charts.css')); ?>"> 
<style>
    body{
	padding:0;
	margin:0;
    background-image: url(https://bestwallpapers.in/wp-content/uploads/2018/06/train-railway-bridge-forest-green-4k-wallpaper-2560x1080.jpg) ;
	background-repeat:  no-repeat center;
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
	<h1>Train Reservation</h1>
	<div class="main">
		<h2>Book Your Tickets Now?</h2>
		<div class="wrapper">
			<div id="seat-map">
			</div>
			<div class="booking-details">
						<div id="legend"></div>
						<h3> Selected Seats (<span id="counter">0</span>):</h3>
						<ul id="selected-seats" class="scrollbar scrollbar1"></ul>
						
						Total: <b>$<span id="total">0</span></b>
						
						<button class="checkout-button">Pay Now</button>
			</div>
			<div class="clear"></div>
		</div>
		<script>
				var firstSeatLabel = 1;
				$(document).ready(function() {
					var $cart = $('#selected-seats'),
						$counter = $('#counter'),
						$total = $('#total'),
						sc = $('#seat-map').seatCharts({
						map: [
							'fff_ff',
							'ffe_ff',
							'efe_ee',
							'efe_ee',
							'eee_fe',
							'eef_ef',
							'fee_ef',
							'eee_fe',
							'eef_ee',
                            'fff_ff',
							'ffe_ff',
							'efe_ee'
						],
						seats: {
							f: {
								price   : 300,
								classes : 'first-class', //your custom CSS class
								category: 'First Class'
							},
							e: {
								price   : 140,
								classes : 'economy-class', //your custom CSS class
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
								[ 'f', 'available',   'First Class' ],
								[ 'e', 'available',   'Economy Class'],
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
	<p class="copy_rights">&copy; Train Ticket Reservation. All Rights Reserved | Design by  <a href="#" target="_blank"> Devansh Shah</a></p>
</div>
<script type="text/javascript" src="<?php echo e(URL::asset('js/jquery.nicescroll.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(URL::asset('js/scripts.js')); ?>"></script>
</body>
</html>
<?php /**PATH G:\laravelproject\resources\views/train.blade.php ENDPATH**/ ?>