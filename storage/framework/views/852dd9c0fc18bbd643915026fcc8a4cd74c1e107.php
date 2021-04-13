<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Bootstrap E-Commerce Template- DIGI Shop mini</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo e(URL::asset('css/owl.carousel.min.css')); ?>">                                   
<link rel="stylesheet" href="<?php echo e(URL::asset('css/sort.css')); ?>">  
<link rel="stylesheet" href="<?php echo e(URL::asset('assets/css/bootstrap.css')); ?>">                                   
<link rel="stylesheet" href="<?php echo e(URL::asset('assets/css/font-awesome.min.css')); ?>">                                   
<link rel="stylesheet" href="<?php echo e(URL::asset('assets/ItemSlider/css/main-style.css')); ?>">                                   
<style>



    /*=======================================
        GENERAL STYLES
    ==================================================*/
    body {
            font-family:'Open Sans', sans-serif;
        font-size:14px;
    }


    .text-center {
        text-align:center;
    }


    h1, h2, h3, h4, h5, h6 {
        font-family:'Open Sans', sans-serif;
    }
    .alg-right-pad {
        float:right;
        padding-right:20px;
    }
    a:hover {
        text-decoration:none;
    }

    /*=======================================
    NAVBAR ADJUSTMENTS
    ==================================================*/
    .navbar-brand {
    font-size: 25px;
    padding: 15px 80px 15px 60px;
    }
    .navbar-default .navbar-brand {
    color: #000000;
    }
    .navbar-default {
    background-color: #000000;
    border-color: #000000;
    }
    .navbar {
    border-radius: 0px; 
    }
    .navbar-default .navbar-nav > li > a {
    color: #FFF;
    }
    .navbar-default .navbar-nav > li > a:hover {
    color: #FFF;
    }

    .navbar-default .navbar-brand {
    color: #FFFFFF;
    }
    .navbar-default .navbar-brand:hover {
    color: #FFFFFF;
    }
    .navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:hover, .navbar-default .navbar-nav > .open > a:focus {
    color: #050505;
    background-color: #FFFFFF;
    }
    .navbar-default .navbar-nav .open .dropdown-menu > li > a {
    color: #000;
    }
    .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover {
    color: #000;
    }
    /*=======================================
    BOOTSTRAP ADJUSTMENTS
    ==================================================*/
    .row {
        margin-bottom:10px;
    }
    .btn {
        margin-bottom:5px;
    }
    /*=======================================
    INDEX PAGE
    ==================================================*/

    .box-border {
        border:1px solid #e1e1e1;
    }

    .product-box h3>a,.product-box h3>a:hover,.product-box h3>a:focus {
        color:#000;
        text-decoration:none;
    }

    .offer-box {
    background-color: #6A75F0;
    border: 1px solid #096FC0;
    color: #fff;
    font-weight: 900;
    font-size:16px;
    }
        .offer-box a {
            color: #fff;
            text-decoration: none;
            font-size: 16px;
            font-weight: normal;
        }
        .offer-box a:hover {
            color:#000;
        }
    .list-group a {
    
        font-size:14px;
        font-weight:900;
        color:#808080;
    }
    .list-group a:hover {
        color:#000;
        text-decoration:none;
    }
    .offer-colors {
    background-color: #B05FDD;
    border: 1px solid #A228F3;
    }

    .download-app-box {
        background-color: #069E98;
    border: 1px solid #0FAA8B;
    padding:30px;
    line-height:40px;
    font-size:25px;
    font-weight:900;
    color:#fff;
    }
    /*=======================================
    SLIDER main-style.css Changes
    ==================================================*/
    .mi-slider {
    margin-top: 0px;
    }

    .offer-text
    {
    position: absolute;
    color: #FFF;
    padding: 14px 16px 12px 16px;
    margin-top: 10px;
    background-color:#18b424;

    }
    .offer-text2
    {
    position: absolute;
    color: #FFF;
    padding: 14px 16px 12px 16px;
    margin-top: 10px;
    background-color:#EB0429;

    }
    /*=======================================
    FOOTER SECTION
    ==================================================*/
    .footer-box {
        background-color:#000;
        padding:20px 50px 20px 50px;
        color:white;
        
    }
    .small-box {
        font-size:15px;
    }

    .footer-box a {
        color:#808080;
        text-decoration:none;
        font-size:15px;
    }
    .footer-box a:hover {
        color:#fff;
        font-size:16px;
    }
    .pad-botom {
        padding-bottom:30px;
    }
    .footer-box p {
        padding-top:15px;
        padding-bottom:15px;
        line-height:25px;
    }
    .social-box a{
        color:#333436;
        text-decoration:none;
    }

    .end-box {
        padding:20px;
        color:#fff;
        background-color:#000;
        font-size:14px;
    }
</style>
</head>
<body>
<header>
<nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand"> <i class="fas fa-shopping-bag"></i>  shopping </a>                
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


            <ul class="nav navbar-nav navbar-left">            
                <li><a class="active" href="#home">Home</a></li>
                <li><a href="#arrival">Arrival</a></li>
                <li><a href="#featured">Featured</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#deal">Deal</a></li>
            </ul>   
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><i class="fas fa-user"></i></a></li>
                    <li  id='btnGiveCommand'><a href="#"><i class="fas fa-microphone"></i></a></li>
                    <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-phone"></i><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><strong>Call: </strong>+91-6283-581-193</a></li>
                            <li><a href="#"><strong>Mail: </strong>devanshshah476@ygmail.com</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><strong>Address: </strong>
                                <div>
                                    234, New york Street,<br />
                                    Just Location, USA
                                </div>
                            </a></li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-right" role="search">
                    <div class="form-group">                        
                        <input id="message" type="text" placeholder="Enter Keyword Here ..." class="form-control">
                    </div>
                    &nbsp; 
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
</header>
<section class="home" id="home">

    <div class="home-slider owl-carousel">

        <div class="item">
            <img src="images/home_img1.jpg" alt="">
            <div class="content">
                <h3>heavy discounts</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, neque.</p>
                <a href="#"><button class="btn">discover</button></a>
            </div>
        </div>
        
        <div class="item">
            <img src="https://th.bing.com/th/id/OIP.KH6OvfNgs9Z3-cxGpYuXTQHaE8?w=276&h=184&c=7&o=5&dpr=1.25&pid=1.7" alt="">
            <div class="content">
                <h3>latest gadgets</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, neque.</p>
                <a href="#"><button class="btn">discover</button></a>
            </div>
        </div>
        <div class="item">
            <img src="images/home_img2.jpg" alt="">
            <div class="content">
                <h3>latest gadgets</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, neque.</p>
                <a href="#"><button class="btn">discover</button></a>
            </div>
        </div>

        <div class="item">
            <img src="images/home_img3.jpg" alt="">
            <div class="content">
                <h3>trending shoes</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, neque.</p>
                <a href="#"><button class="btn">discover</button></a>
            </div>
        </div>

        <div class="item">
            <img src="https://vistapointe.net/images/shop-wallpaper-8.jpg" alt="">
            <div class="content">
                <h3>Styles for everyone</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, neque.</p>
                <a href="#"><button class="btn">discover</button></a>
            </div>
        </div>

    </div>

</section>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="well well-lg offer-box text-center">


                   Today's Offer : &nbsp; <span class="glyphicon glyphicon-cog"></span>&nbsp;40 % off  on purchase of $ 2,000 and above till 24 dec !                
              
               
                </div>
                <div class="main box-border">
                    <div id="mi-slider" class="mi-slider">
                        <ul>

                            <li><a href="#">
                                <img src="assets/ItemSlider/images/1.jpg" alt="img01"><h4>Boots</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/2.jpg" alt="img02"><h4>Oxfords</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/3.jpg" alt="img03"><h4>Loafers</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/4.jpg" alt="img04"><h4>Sneakers</h4>
                            </a></li>
                        </ul>
                        <ul>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/5.jpg" alt="img05"><h4>Belts</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/6.jpg" alt="img06"><h4>Hats &amp; Caps</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/7.jpg" alt="img07"><h4>Sunglasses</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/8.jpg" alt="img08"><h4>Scarves</h4>
                            </a></li>
                        </ul>
                        <ul>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/9.jpg" alt="img09"><h4>Casual</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/10.jpg" alt="img10"><h4>Luxury</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/11.jpg" alt="img11"><h4>Sport</h4>
                            </a></li>
                        </ul>
                        <ul>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/12.jpg" alt="img12"><h4>Carry-Ons</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/13.jpg" alt="img13"><h4>Duffel Bags</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/14.jpg" alt="img14"><h4>Laptop Bags</h4>
                            </a></li>
                            <li><a href="#">
                                <img src="assets/ItemSlider/images/15.jpg" alt="img15"><h4>Briefcases</h4>
                            </a></li>
                        </ul>
                        <nav>
                            <a href="#">Shoes</a>
                            <a href="#">Accessories</a>
                            <a href="#">Watches</a>
                            <a href="#">Bags</a>
                        </nav>
                    </div>
                    
                </div>
                <br />
            </div>
        </div>
    </div>
    <!-- /.container -->
<section class="feature" id="featured">

    <h1 class="heading"> <span> featured product </span> </h1>

    <div class="row">

    <div class="image-container">

        <div class="big-image">
            <img src="images/watch1.jpg" alt="">
        </div>

        <div class="small-image">
            <img class="image-active" src="images/watch1.jpg" alt="">
            <img src="images/watch2.jpg" alt="">
            <img src="images/watch3.jpg" alt="">
            <img src="images/watch4.jpg" alt="">
        </div>

    </div>

    <div class="content">

        <h3>smart watches</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <span>(500+) reviews</span>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, at!</p>
        <strong class="price">₹1000 <span>₹1500</span> </strong>
        <a href="#"><button class="btn">buy now</button></a>

    </div>

    </div>

</section>
<section class="arrival" id="arrival">

    <h1 class="heading"> <span>new arrivals</span> </h1>

    <div class="box-container">

    <div class="box">
        <div class="image">
            <img src="images/arr_img1.jpg" alt="">
        </div>
        <div class="info">
            <h3>smart tv</h3>
            <div class="subInfo">
                <strong class="price"> ₹1000/- <span>₹1500/-</span> </strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
        <div class="overlay">
            <a href="#" style="--i:1;" class="fas fa-heart"></a>
            <a href="#" style="--i:2;" class="fas fa-shopping-cart"></a>
            <a href="#" style="--i:3;" class="fas fa-search"></a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/arr_img2.jpg" alt="">
        </div>
        <div class="info">
            <h3>game console</h3>
            <div class="subInfo">
                <strong class="price"> ₹1000/- <span>₹1500/-</span> </strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
        <div class="overlay">
            <a href="#" style="--i:1;" class="fas fa-heart"></a>
            <a href="#" style="--i:2;" class="fas fa-shopping-cart"></a>
            <a href="#" style="--i:3;" class="fas fa-search"></a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/arr_img3.jpg" alt="">
        </div>
        <div class="info">
            <h3>latest shoes</h3>
            <div class="subInfo">
                <strong class="price"> ₹1000/- <span>₹1500/-</span> </strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
        <div class="overlay">
            <a href="#" style="--i:1;" class="fas fa-heart"></a>
            <a href="#" style="--i:2;" class="fas fa-shopping-cart"></a>
            <a href="#" style="--i:3;" class="fas fa-search"></a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/arr_img4.jpg" alt="">
        </div>
        <div class="info">
            <h3>smartphones</h3>
            <div class="subInfo">
                <strong class="price"> ₹1000/- <span>₹1500/-</span> </strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
        <div class="overlay">
            <a href="#" style="--i:1;" class="fas fa-heart"></a>
            <a href="#" style="--i:2;" class="fas fa-shopping-cart"></a>
            <a href="#" style="--i:3;" class="fas fa-search"></a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/arr_img5.jpg" alt="">
        </div>
        <div class="info">
            <h3>branded t-shirts</h3>
            <div class="subInfo">
                <strong class="price"> ₹1000/- <span>₹1500/-</span> </strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
        <div class="overlay">
            <a href="#" style="--i:1;" class="fas fa-heart"></a>
            <a href="#" style="--i:2;" class="fas fa-shopping-cart"></a>
            <a href="#" style="--i:3;" class="fas fa-search"></a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/arr_img6.jpg" alt="">
        </div>
        <div class="info">
            <h3>amazing speakers</h3>
            <div class="subInfo">
                <strong class="price"> ₹1000/- <span>₹1500/-</span> </strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
        <div class="overlay">
            <a href="#" style="--i:1;" class="fas fa-heart"></a>
            <a href="#" style="--i:2;" class="fas fa-shopping-cart"></a>
            <a href="#" style="--i:3;" class="fas fa-search"></a>
        </div>
    </div>

    </div>

</section>

<section class="gallery" id="gallery">

    <h1 class="heading"> <span> product gallery </span> </h1>

    <ul class="controls">
        <li class="btn button-active" data-filter="all">all</li>
        <li class="btn" data-filter="phone">phone</li>
        <li class="btn" data-filter="laptop">laptop</li>
        <li class="btn" data-filter="headphone">headphone</li>
        <li class="btn" data-filter="shoes">shoes</li>
        <li class="btn" data-filter="bag">Bags</li>
        <li class="btn" data-filter="accessories">Accessories</li>
    </ul>

    <div class="image-container">
        <div class="box accessories">
            <div class="image">
                <img src="images/arr_img6.jpg" alt="">
            </div>
            <div class="info">
                <h3>Bluetooth Speakers</h3>
                <div class="subInfo">
                    <strong class="price">₹1000</strong>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="box shoes">
            <div class="image">
                <img src="images/1.jpg" alt="">
            </div>
            <div class="info">
                <h3>shoes</h3>
                <div class="subInfo">
                    <strong class="price">₹1000</strong>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="box phone">
            <div class="image">
                <img src="images/g_img1.jpg" alt="">
            </div>
            <div class="info">
                <h3>smartphones</h3>
                <div class="subInfo">
                    <strong class="price">₹1000</strong>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="box shoes">
            <div class="image">
                <img src="images/2.jpg" alt="">
            </div>
            <div class="info">
                <h3>shoes</h3>
                <div class="subInfo">
                    <strong class="price">₹1000</strong>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="box phone">
            <div class="image">
                <img src="images/g_img2.jpg" alt="">
            </div>
            <div class="info">
                <h3>smartphones</h3>
                <div class="subInfo">
                    <strong class="price">₹1000</strong>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="box laptop">
            <div class="image">
                <img src="images/g_img3.jpg" alt="">
            </div>
            <div class="info">
                <h3>laptop</h3>
                <div class="subInfo">
                    <strong class="price">₹1000</strong>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="box shoes">
            <div class="image">
                <img src="images/3.jpg" alt="">
            </div>
            <div class="info">
                <h3>shoes</h3>
                <div class="subInfo">
                    <strong class="price">₹1000</strong>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="box shoes">
            <div class="image">
                <img src="images/g_img4.jpg" alt="">
            </div>
            <div class="info">
                <h3>shoes</h3>
                <div class="subInfo">
                    <strong class="price">₹1000</strong>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="box shoes">
            <div class="image">
                <img src="images/4.jpg" alt="">
            </div>
            <div class="info">
                <h3>shoes</h3>
                <div class="subInfo">
                    <strong class="price">₹1000</strong>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="box bag">
            <div class="image">
                <img src="images/backpackWoman.png" alt="">
            </div>
            <div class="info">
                <h3>Bags</h3>
                <div class="subInfo">
                    <strong class="price">₹1000</strong>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="box bag">
            <div class="image">
                <img src="images/backpackMan.png" alt="">
            </div>
            <div class="info">
                <h3>Bags</h3>
                <div class="subInfo">
                    <strong class="price">₹1000</strong>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="box shoes">
            <div class="image">
                <img src="images/banner_img_01.jpg" alt="">
            </div>
            <div class="info">
                <h3>shoes</h3>
                <div class="subInfo">
                    <strong class="price">₹1000</strong>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="box laptop">
            <div class="image">
                <img src="images/g_img5.jpg" alt="">
            </div>
            <div class="info">
                <h3>laptop</h3>
                <div class="subInfo">
                    <strong class="price">₹1000</strong>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="box headphone">
            <div class="image">
                <img src="images/g_img6.jpg" alt="">
            </div>
            <div class="info">
                <h3>headphone</h3>
                <div class="subInfo">
                    <strong class="price">₹1000</strong>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                    </div>
                </div>
            </div>
        </div> 
        <div class="box shoes">
            <div class="image">
                <img src="images/g_img7.jpg" alt="">
            </div>
            <div class="info">
                <h3>shoes</h3>
                <div class="subInfo">
                    <strong class="price">₹1000</strong>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                    </div>
                </div>
            </div>
        </div> 
        <div class="box headphone">
            <div class="image">
                <img src="images/g_img8.jpg" alt="">
            </div>
            <div class="info">
                <h3>headphone</h3>
                <div class="subInfo">
                    <strong class="price">₹1000</strong>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                    </div>
                </div>
            </div>
        </div> 
        <div class="box headphone">
            <div class="image">
                <img src="images/g_img9.jpg" alt="">
            </div>
            <div class="info">
                <h3>headphone</h3>
                <div class="subInfo">
                    <strong class="price">₹1000</strong>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                    </div>
                </div>
            </div>
        </div> 
        <div class="box shoes">
            <div class="image">
                <img src="images/category_img_02.jpg" alt="">
            </div>
            <div class="info">
                <h3>shoes</h3>
                <div class="subInfo">
                    <strong class="price">₹1000</strong>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                    </div>
                </div>
            </div>
        </div> 
        <div class="box headphone">
            <div class="image">
                <img src="images/feature1.png" alt="">
            </div>
            <div class="info">
                <h3>headphone</h3>
                <div class="subInfo">
                    <strong class="price">₹1000</strong>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                    </div>
                </div>
            </div>
        </div> 
        <div class="box accessories">
            <div class="image">
                <img src="images/feature3.png" alt="">
            </div>
            <div class="info">
                <h3>Ear -pod</h3>
                <div class="subInfo">
                    <strong class="price">₹1000</strong>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                    </div>
                </div>
            </div>
        </div> 
        <div class="box shoes">
            <div class="image">
                <img src="images/arr_img3.jpg" alt="">
            </div>
            <div class="info">
                <h3>shoes</h3>
                <div class="subInfo">
                    <strong class="price">₹1000</strong>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                    </div>
                </div>
            </div>
        </div> 
        <div class="box accessories">
            <div class="image">
                <img src="images/feature4.png" alt="">
            </div>
            <div class="info">
                <h3>Smart-Watches</h3>
                <div class="subInfo">
                    <strong class="price">₹1000</strong>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                    </div>
                </div>
            </div>
        </div> 
        <div class="box accessories">
            <div class="image">
                <img src="images/feature2.png" alt="">
            </div>
            <div class="info">
                <h3>Speakers</h3>
                <div class="subInfo">
                    <strong class="price">₹1000</strong>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                    </div>
                </div>
            </div>
        </div> 
        <div class="box accessories">
            <div class="image">
                <img src="images/new3.png" alt="">
            </div>
            <div class="info">
                <h3>Sun glass</h3>
                <div class="subInfo">
                    <strong class="price">₹1000</strong>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                    </div>
                </div>
            </div>
        </div> 
        <div class="box accessories">
            <div class="image">
                <img src="images/new6.png" alt="">
            </div>
            <div class="info">
                <h3>Hand bag</h3>
                <div class="subInfo">
                    <strong class="price">₹1000</strong>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                    </div>
                </div>
            </div>
        </div> 
        <div class="box accessories">
            <div class="image">
                <img src="images/watch1.jpg" alt="">
            </div>
            <div class="info">
                <h3>watch</h3>
                <div class="subInfo">
                    <strong class="price">₹1000</strong>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                    </div>
                </div>
            </div>
        </div> 
        <div class="box accessories">
            <div class="image">
                <img src="images/watch2.jpg" alt="">
            </div>
            <div class="info">
                <h3>watch</h3>
                <div class="subInfo">
                    <strong class="price">₹1000</strong>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                    </div>
                </div>
            </div>
        </div> 
        <div class="box accessories">
            <div class="image">
                <img src="images/watch3.jpg" alt="">
            </div>
            <div class="info">
                <h3>watch</h3>
                <div class="subInfo">
                    <strong class="price">₹1000</strong>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                    </div>
                </div>
            </div>
        </div> 
        <div class="box accessories">
            <div class="image">
                <img src="images/watch3.jpg" alt="">
            </div>
            <div class="info">
                <h3>watch</h3>
                <div class="subInfo">
                    <strong class="price">₹1000</strong>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                    </div>
                </div>
            </div>
        </div> 


    </div>

</section>


<section class="deal" id="deal">

    <h1 class="heading"> <span> best deals </span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/deal1.jpg" alt="">
            <div class="content">
                <h3>latest laptop</h3>
                <p>upto 25% off on first purchase</p>
                <a href="#"><button class="btn">explore</button></a>
            </div>
        </div>

        <div class="box">
            <img src="images/deal2.jpg" alt="">
            <div class="content">
                <h3>new headphone</h3>
                <p>upto 25% off on first purchase</p>
                <a href="#"><button class="btn">explore</button></a>
            </div>
        </div>

    </div>

    <div class="icons-container">

        <div class="icons">
            <i class="fas fa-shipping-fast"></i>
            <h3>fast delivery</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi, molestiae?</p>
        </div>

        <div class="icons">
            <i class="fas fa-user-clock"></i>
            <h3>24 x 7 support</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi, molestiae?</p>
        </div>

        <div class="icons">
            <i class="fas fa-money-check-alt"></i>
            <h3>easy payments</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi, molestiae?</p>
        </div>

        <div class="icons">
            <i class="fas fa-box"></i>
            <h3>10 days replacements</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi, molestiae?</p>
        </div>

    </div>

</section>
<section class="footer">

    <div class="box-container">

        <div class="box">
            <a href="#" class="logo"> <i class="fas fa-shopping-bag"></i>  shopping </a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique expedita molestiae distinctio facere beatae velit, maiores ullam molestias necessitatibus sapiente.</p>
        </div>

        <div class="box">
            <h3>links</h3>
            <a href="#">home</a>
            <a href="#">arrival</a>
            <a href="#">featured</a>
            <a href="#">gallery</a>
            <a href="#">deal</a>
        </div>

        <div class="box">
            <h3>contact us</h3>
            <p> <i class="fas fa-home"></i>
                Ahmedabad, Gujarat, 
                india - 38001
            </p>
            <p> <i class="fas fa-phone"></i>
                +91-6283-581-193
            </p>
            <p> <i class="fas fa-globe"></i>
                devanshshah476@gmail.com
            </p>
        </div>

    </div>


</section>
    <!--Footer -->
<section class="newsletter">

        <h1>newsletter</h1>
        <p>get in touch for latest discounts and updates</p>
        <form action="">
            <input type="email" placeholder="enter your email">
            <input type="submit" class="btn">
        </form>

</section>
    <div class="col-md-12 footer-box">


        <div class="row small-box ">
            <strong>Mobiles :</strong> 
            <a href="#">samsung</a> |  
            <a href="#">Sony</a> | 
            <a href="#">Micromax</a> | 
            <a href="#">Mi</a> | 
            <a href="#">Realme</a> | 
            <a href="#">Apple</a> | 
            <a href="#">Vivo</a> | 
            <a href="#">Oppo</a> |
            <a href="#">Intex</a> |
            <a href="#">Lava</a> |
            <a href="#">Nokia</a> |
            <a href="#">Tecno</a> |
            <a href="#">Asus Rog</a> |
            <a href="#">One Plus</a> |
            <a href="#">Infinix</a> |
            <a href="#">Motorola</a> |
            <a href="#">Asus</a>             
        </div>
        <div class="row small-box ">
            <strong>Laptops :</strong> 
            <a href="#">Sony</a> |
            <a href="#">Viao</a> |
            <a href="#">HP</a> |
            <a href="#">Dell</a> |
            <a href="#">Asus</a> |
            <a href="#">Acer</a> |
            <a href="#">Compact</a> |
            <a href="#">Microsoft</a> |
            <a href="#">Apple</a> |
            <a href="#">Avita</a> |
            <a href="#">Samsung</a> |
            <a href="#">Xiaomi</a> |
            <a href="#">Lenove</a> |
            <a href="#">Razor</a> |
            <a href="#">MSI</a> |
            <a href="#">RDP</a> |
            <a href="#">Lava</a> |
            <a href="#">Micromax</a> |
            <a href="#">A.G.B</a> |

        </div>
        <div class="row small-box ">
            <strong>Tablets : </strong>
            <a href="#">samsung</a> |  
            <a href="#">Sony Tablets</a> | 
            <a href="#">Apple</a> | 
            <a href="#">Lenove</a> |
            <a href="#">Micromax</a> |
            <a href="#">Microsoft</a> |
            <a href="#">Huawei</a> |
            <a href="#">Asus</a> |
            <a href="#">Google</a> |
            <a href="#">Nvidia</a> |
            <a href="#">H.T.C</a> |
            <a href="#">Acer</a> |
            <a href="#">Alectal</a> |
            <a href="#">Croma</a> |
            <a href="#">Google</a> |
                  
        </div>
        <div class="row small-box pad-botom ">
            <strong>Accessories :</strong> 
            <a href="#">Watches</a> | 
            <a href="#">Footwear</a> | 
            <a href="#">Hand-Bags</a> | 
            <a href="#">Wallets</a> | 
            <a href="#">Sun-glasses</a> | 
            <a href="#">Perfume</a> | 
            <a href="#">Sprays</a> | 
            <a href="#">Bracelets</a> | 
            <a href="#">Rings</a> | 
            <a href="#">Chains</a> | 
            <a href="#">Smart-Watch</a> | 
            <a href="#">Tie</a> | 
            
        </div>
        <hr>
    </div>

    

  <script type="text/javascript" src="<?php echo e(URL::asset('assets/js/jquery-1.10.2.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(URL::asset('assets/js/bootstrap.js')); ?>"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>

var message = document.querySelector('#message');

var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
var SpeechGrammarList = SpeechGrammarList || webkitSpeechGrammarList;

var grammar = '#JSGF V1.0;'

var recognition = new SpeechRecognition();
var speechRecognitionList = new SpeechGrammarList();
speechRecognitionList.addFromString(grammar, 1);
recognition.grammars = speechRecognitionList;
recognition.lang = 'en-US';
recognition.interimResults = false;

recognition.onresult = function(event) {
    var last = event.results.length - 1;
    var command = event.results[last][0].transcript;
    message.textContent = 'Voice Input: ' + command + '.';

    if(command.toLowerCase() === 'select steve'){
        document.querySelector('#chkSteve').checked = true;
    }
    else if (command.toLowerCase() === 'select tony'){
        document.querySelector('#chkTony').checked = true;
    }
    else if (command.toLowerCase() === 'select bruce'){
        document.querySelector('#chkBruce').checked = true;
    }
    else if (command.toLowerCase() === 'select nick'){
        document.querySelector('#chkNick').checked = true;
    }   
};

recognition.onspeechend = function() {
    recognition.stop();
};

recognition.onerror = function(event) {
    message.textContent = 'Error occurred in recognition: ' + event.error;
}        

document.querySelector('#btnGiveCommand').addEventListener('click', function(){
    recognition.start();

});



        $(document).ready(function(){

    $('#menu').click(function(){
        $(this).toggleClass('fa-times');
        $('.navbar').toggleClass('nav-toggle');
    });

    $(window).on('scroll load',function(){

        $('#menu').removeClass('fa-times');
        $('.navbar').removeClass('nav-toggle');

        if($(window).scrollTop() > 68){
            $('header .header-2').addClass('header-active');
        }else{
            $('header .header-2').removeClass('header-active');
        }

        $('section').each(function(){

            let height = $(this).height();
            let offset = $(this).offset().top - 200;
            let top = $(window).scrollTop();
            let id = $(this).attr('id');

            if(top >= offset && top < offset + height){
                $('.navbar ul li a').removeClass('active');
                $('.navbar').find(`[href="#${id}"]`).addClass('active');
            }

        });

    });

    $('.home-slider').owlCarousel({
        items:1,
        nav:true,
        dots:false,
        autoplay:true,
        autoplayTimeout:8000,
        loop:true
    });

    $('.small-image img').click(function(){

        $(this).addClass('image-active').siblings().removeClass('image-active');
        let image = $(this).attr('src');
        $('.big-image img').attr('src', image);

    });

    $('.gallery .btn').click(function(){

        let filter = $(this).attr('data-filter');
        if(filter == 'all'){
            $('.gallery .box').show(400);
        }else{
            $('.gallery .box').not('.'+filter).hide(200);
            $('.gallery .box').filter('.'+filter).show(400);
        }

        $(this).addClass('button-active').siblings().removeClass('button-active');

    });

    });
                    $(function () {

                        $('#mi-slider').catslider();

                    });
                    ;( function( $, window, undefined ) {
            ;window.Modernizr=function(a,b,c){function x(a){j.cssText=a}function y(a,b){return x(prefixes.join(a+";")+(b||""))}function z(a,b){return typeof a===b}function A(a,b){return!!~(""+a).indexOf(b)}function B(a,b){for(var d in a){var e=a[d];if(!A(e,"-")&&j[e]!==c)return b=="pfx"?e:!0}return!1}function C(a,b,d){for(var e in a){var f=b[a[e]];if(f!==c)return d===!1?a[e]:z(f,"function")?f.bind(d||b):f}return!1}function D(a,b,c){var d=a.charAt(0).toUpperCase()+a.slice(1),e=(a+" "+n.join(d+" ")+d).split(" ");return z(b,"string")||z(b,"undefined")?B(e,b):(e=(a+" "+o.join(d+" ")+d).split(" "),C(e,b,c))}var d="2.6.2",e={},f=!0,g=b.documentElement,h="modernizr",i=b.createElement(h),j=i.style,k,l={}.toString,m="Webkit Moz O ms",n=m.split(" "),o=m.toLowerCase().split(" "),p={},q={},r={},s=[],t=s.slice,u,v={}.hasOwnProperty,w;!z(v,"undefined")&&!z(v.call,"undefined")?w=function(a,b){return v.call(a,b)}:w=function(a,b){return b in a&&z(a.constructor.prototype[b],"undefined")},Function.prototype.bind||(Function.prototype.bind=function(b){var c=this;if(typeof c!="function")throw new TypeError;var d=t.call(arguments,1),e=function(){if(this instanceof e){var a=function(){};a.prototype=c.prototype;var f=new a,g=c.apply(f,d.concat(t.call(arguments)));return Object(g)===g?g:f}return c.apply(b,d.concat(t.call(arguments)))};return e}),p.cssanimations=function(){return D("animationName")},p.csstransforms=function(){return!!D("transform")};for(var E in p)w(p,E)&&(u=E.toLowerCase(),e[u]=p[E](),s.push((e[u]?"":"no-")+u));return e.addTest=function(a,b){if(typeof a=="object")for(var d in a)w(a,d)&&e.addTest(d,a[d]);else{a=a.toLowerCase();if(e[a]!==c)return e;b=typeof b=="function"?b():b,typeof f!="undefined"&&f&&(g.className+=" "+(b?"":"no-")+a),e[a]=b}return e},x(""),i=k=null,function(a,b){function k(a,b){var c=a.createElement("p"),d=a.getElementsByTagName("head")[0]||a.documentElement;return c.innerHTML="x<style>"+b+"</style>",d.insertBefore(c.lastChild,d.firstChild)}function l(){var a=r.elements;return typeof a=="string"?a.split(" "):a}function m(a){var b=i[a[g]];return b||(b={},h++,a[g]=h,i[h]=b),b}function n(a,c,f){c||(c=b);if(j)return c.createElement(a);f||(f=m(c));var g;return f.cache[a]?g=f.cache[a].cloneNode():e.test(a)?g=(f.cache[a]=f.createElem(a)).cloneNode():g=f.createElem(a),g.canHaveChildren&&!d.test(a)?f.frag.appendChild(g):g}function o(a,c){a||(a=b);if(j)return a.createDocumentFragment();c=c||m(a);var d=c.frag.cloneNode(),e=0,f=l(),g=f.length;for(;e<g;e++)d.createElement(f[e]);return d}function p(a,b){b.cache||(b.cache={},b.createElem=a.createElement,b.createFrag=a.createDocumentFragment,b.frag=b.createFrag()),a.createElement=function(c){return r.shivMethods?n(c,a,b):b.createElem(c)},a.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+l().join().replace(/\w+/g,function(a){return b.createElem(a),b.frag.createElement(a),'c("'+a+'")'})+");return n}")(r,b.frag)}function q(a){a||(a=b);var c=m(a);return r.shivCSS&&!f&&!c.hasCSS&&(c.hasCSS=!!k(a,"article,aside,figcaption,figure,footer,header,hgroup,nav,section{display:block}mark{background:#FF0;color:#000}")),j||p(a,c),a}var c=a.html5||{},d=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,e=/^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,f,g="_html5shiv",h=0,i={},j;(function(){try{var a=b.createElement("a");a.innerHTML="<xyz></xyz>",f="hidden"in a,j=a.childNodes.length==1||function(){b.createElement("a");var a=b.createDocumentFragment();return typeof a.cloneNode=="undefined"||typeof a.createDocumentFragment=="undefined"||typeof a.createElement=="undefined"}()}catch(c){f=!0,j=!0}})();var r={elements:c.elements||"abbr article aside audio bdi canvas data datalist details figcaption figure footer header hgroup mark meter nav output progress section summary time video",shivCSS:c.shivCSS!==!1,supportsUnknownElements:j,shivMethods:c.shivMethods!==!1,type:"default",shivDocument:q,createElement:n,createDocumentFragment:o};a.html5=r,q(b)}(this,b),e._version=d,e._domPrefixes=o,e._cssomPrefixes=n,e.testProp=function(a){return B([a])},e.testAllProps=D,e.prefixed=function(a,b,c){return b?D(a,b,c):D(a,"pfx")},g.className=g.className.replace(/(^|\s)no-js(\s|$)/,"$1$2")+(f?" js "+s.join(" "):""),e}(this,this.document),function(a,b,c){function d(a){return"[object Function]"==o.call(a)}function e(a){return"string"==typeof a}function f(){}function g(a){return!a||"loaded"==a||"complete"==a||"uninitialized"==a}function h(){var a=p.shift();q=1,a?a.t?m(function(){("c"==a.t?B.injectCss:B.injectJs)(a.s,0,a.a,a.x,a.e,1)},0):(a(),h()):q=0}function i(a,c,d,e,f,i,j){function k(b){if(!o&&g(l.readyState)&&(u.r=o=1,!q&&h(),l.onload=l.onreadystatechange=null,b)){"img"!=a&&m(function(){t.removeChild(l)},50);for(var d in y[c])y[c].hasOwnProperty(d)&&y[c][d].onload()}}var j=j||B.errorTimeout,l=b.createElement(a),o=0,r=0,u={t:d,s:c,e:f,a:i,x:j};1===y[c]&&(r=1,y[c]=[]),"object"==a?l.data=c:(l.src=c,l.type=a),l.width=l.height="0",l.onerror=l.onload=l.onreadystatechange=function(){k.call(this,r)},p.splice(e,0,u),"img"!=a&&(r||2===y[c]?(t.insertBefore(l,s?null:n),m(k,j)):y[c].push(l))}function j(a,b,c,d,f){return q=0,b=b||"j",e(a)?i("c"==b?v:u,a,b,this.i++,c,d,f):(p.splice(this.i++,0,a),1==p.length&&h()),this}function k(){var a=B;return a.loader={load:j,i:0},a}var l=b.documentElement,m=a.setTimeout,n=b.getElementsByTagName("script")[0],o={}.toString,p=[],q=0,r="MozAppearance"in l.style,s=r&&!!b.createRange().compareNode,t=s?l:n.parentNode,l=a.opera&&"[object Opera]"==o.call(a.opera),l=!!b.attachEvent&&!l,u=r?"object":l?"script":"img",v=l?"script":u,w=Array.isArray||function(a){return"[object Array]"==o.call(a)},x=[],y={},z={timeout:function(a,b){return b.length&&(a.timeout=b[0]),a}},A,B;B=function(a){function b(a){var a=a.split("!"),b=x.length,c=a.pop(),d=a.length,c={url:c,origUrl:c,prefixes:a},e,f,g;for(f=0;f<d;f++)g=a[f].split("="),(e=z[g.shift()])&&(c=e(c,g));for(f=0;f<b;f++)c=x[f](c);return c}function g(a,e,f,g,h){var i=b(a),j=i.autoCallback;i.url.split(".").pop().split("?").shift(),i.bypass||(e&&(e=d(e)?e:e[a]||e[g]||e[a.split("/").pop().split("?")[0]]),i.instead?i.instead(a,e,f,g,h):(y[i.url]?i.noexec=!0:y[i.url]=1,f.load(i.url,i.forceCSS||!i.forceJS&&"css"==i.url.split(".").pop().split("?").shift()?"c":c,i.noexec,i.attrs,i.timeout),(d(e)||d(j))&&f.load(function(){k(),e&&e(i.origUrl,h,g),j&&j(i.origUrl,h,g),y[i.url]=2})))}function h(a,b){function c(a,c){if(a){if(e(a))c||(j=function(){var a=[].slice.call(arguments);k.apply(this,a),l()}),g(a,j,b,0,h);else if(Object(a)===a)for(n in m=function(){var b=0,c;for(c in a)a.hasOwnProperty(c)&&b++;return b}(),a)a.hasOwnProperty(n)&&(!c&&!--m&&(d(j)?j=function(){var a=[].slice.call(arguments);k.apply(this,a),l()}:j[n]=function(a){return function(){var b=[].slice.call(arguments);a&&a.apply(this,b),l()}}(k[n])),g(a[n],j,b,n,h))}else!c&&l()}var h=!!a.test,i=a.load||a.both,j=a.callback||f,k=j,l=a.complete||f,m,n;c(h?a.yep:a.nope,!!i),i&&c(i)}var i,j,l=this.yepnope.loader;if(e(a))g(a,0,l,0);else if(w(a))for(i=0;i<a.length;i++)j=a[i],e(j)?g(j,0,l,0):w(j)?B(j):Object(j)===j&&h(j,l);else Object(a)===a&&h(a,l)},B.addPrefix=function(a,b){z[a]=b},B.addFilter=function(a){x.push(a)},B.errorTimeout=1e4,null==b.readyState&&b.addEventListener&&(b.readyState="loading",b.addEventListener("DOMContentLoaded",A=function(){b.removeEventListener("DOMContentLoaded",A,0),b.readyState="complete"},0)),a.yepnope=k(),a.yepnope.executeStack=h,a.yepnope.injectJs=function(a,c,d,e,i,j){var k=b.createElement("script"),l,o,e=e||B.errorTimeout;k.src=a;for(o in d)k.setAttribute(o,d[o]);c=j?h:c||f,k.onreadystatechange=k.onload=function(){!l&&g(k.readyState)&&(l=1,c(),k.onload=k.onreadystatechange=null)},m(function(){l||(l=1,c(1))},e),i?k.onload():n.parentNode.insertBefore(k,n)},a.yepnope.injectCss=function(a,c,d,e,g,i){var e=b.createElement("link"),j,c=i?h:c||f;e.href=a,e.rel="stylesheet",e.type="text/css";for(j in d)e.setAttribute(j,d[j]);g||(n.parentNode.insertBefore(e,n),m(c,0))}}(this,document),Modernizr.load=function(){yepnope.apply(window,[].slice.call(arguments,0))};

            'use strict';

            $.CatSlider = function( options, element ) {
                this.$el = $( element );
                this._init( options );
            };

            $.CatSlider.prototype = {

                _init : function( options ) {

                    // the categories (ul)
                    this.$categories = this.$el.children( 'ul' );
                    // the navigation
                    this.$navcategories = this.$el.find( 'nav > a' );
                    var animEndEventNames = {
                        'WebkitAnimation' : 'webkitAnimationEnd',
                        'OAnimation' : 'oAnimationEnd',
                        'msAnimation' : 'MSAnimationEnd',
                        'animation' : 'animationend'
                    };
                    // animation end event name
                    this.animEndEventName = animEndEventNames[ Modernizr.prefixed( 'animation' ) ];
                    // animations and transforms support
                    this.support = Modernizr.csstransforms && Modernizr.cssanimations;
                    // if currently animating
                    this.isAnimating = false;
                    // current category
                    this.current = 0;
                    var $currcat = this.$categories.eq( 0 );
                    if( !this.support ) {
                        this.$categories.hide();
                        $currcat.show();
                    }
                    else {
                        $currcat.addClass( 'mi-current' );
                    }
                    // current nav category
                    this.$navcategories.eq( 0 ).addClass( 'mi-selected' );
                    // initialize the events
                    this._initEvents();

                },
                _initEvents : function() {

                    var self = this;
                    this.$navcategories.on( 'click.catslider', function() {
                        self.showCategory( $( this ).index() );
                        return false;
                    } );

                    // reset on window resize..
                    $( window ).on( 'resize', function() {
                        self.$categories.removeClass().eq( 0 ).addClass( 'mi-current' );
                        self.$navcategories.eq( self.current ).removeClass( 'mi-selected' ).end().eq( 0 ).addClass( 'mi-selected' );
                        self.current = 0;
                    } );

                },
                showCategory : function( catidx ) {

                    if( catidx === this.current || this.isAnimating ) {
                        return false;
                    }
                    this.isAnimating = true;
                    // update selected navigation
                    this.$navcategories.eq( this.current ).removeClass( 'mi-selected' ).end().eq( catidx ).addClass( 'mi-selected' );

                    var dir = catidx > this.current ? 'right' : 'left',
                        toClass = dir === 'right' ? 'mi-moveToLeft' : 'mi-moveToRight',
                        fromClass = dir === 'right' ? 'mi-moveFromRight' : 'mi-moveFromLeft',
                        // current category
                        $currcat = this.$categories.eq( this.current ),
                        // new category
                        $newcat = this.$categories.eq( catidx ),
                        $newcatchild = $newcat.children(),
                        lastEnter = dir === 'right' ? $newcatchild.length - 1 : 0,
                        self = this;

                    if( this.support ) {

                        $currcat.removeClass().addClass( toClass );
                        
                        setTimeout( function() {

                            $newcat.removeClass().addClass( fromClass );
                            $newcatchild.eq( lastEnter ).on( self.animEndEventName, function() {

                                $( this ).off( self.animEndEventName );
                                $newcat.addClass( 'mi-current' );
                                self.current = catidx;
                                var $this = $( this );
                                // solve chrome bug
                                self.forceRedraw( $this.get(0) );
                                self.isAnimating = false;

                            } );

                        }, $newcatchild.length * 90 );

                    }
                    else {

                        $currcat.hide();
                        $newcat.show();
                        this.current = catidx;
                        this.isAnimating = false;

                    }

                },
                // based on http://stackoverflow.com/a/8840703/989439
                forceRedraw : function(element) {
                    if (!element) { return; }
                    var n = document.createTextNode(' '),
                        position = element.style.position;
                    element.appendChild(n);
                    element.style.position = 'relative';
                    setTimeout(function(){
                        element.style.position = position;
                        n.parentNode.removeChild(n);
                    }, 25);
                }

            }

            $.fn.catslider = function( options ) {
                var instance = $.data( this, 'catslider' );
                if ( typeof options === 'string' ) {
                    var args = Array.prototype.slice.call( arguments, 1 );
                    this.each(function() {
                        instance[ options ].apply( instance, args );
                    });
                }
                else {
                    this.each(function() {
                        instance ? instance._init() : instance = $.data( this, 'catslider', new $.CatSlider( options, this ) );
                    });
                }
                return instance;
            };

            } )( jQuery, window );
</script>
</body>
</html>
<?php /**PATH G:\laravelproject\resources\views/shop.blade.php ENDPATH**/ ?>