<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="{{url('public')}}/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{url('public')}}/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{url('public')}}/assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="{{url('public')}}/assets/css/price-range.css" rel="stylesheet">
    <link href="{{url('public')}}/assets/css/animate.css" rel="stylesheet">
	<link href="{{url('public')}}/assets/css/main.css" rel="stylesheet">
	<link href="{{url('public')}}/assets/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="{{url('public')}}/assets/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{url('public')}}/assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{url('public')}}/assets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{url('public')}}/assets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="{{url('public')}}/assets/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="home"><img src="{{url('public')}}/assets/images/home/logo.png" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="cart"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<li><a href="Login"><i class="fa fa-lock"></i> Login</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="home">Home</a></li>
							<li><a href="shop">Product</a></li>
							<li><a href="product">Product Details</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
						<form action="{{ url('home/filter2') }}" method="POST">
							@csrf
							<input type="text" placeholder="Search" name="nama" value="{{ $nama ?? '' }}">
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>Free E-Commerce Template</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="{{url('public')}}/assets/images/home/girl1.jpg" class="girl img-responsive" alt="" />
									<img src="{{url('public')}}/assets/images/home/pricing.png"  class="pricing" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>100% Responsive Design</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="{{url('public')}}/assets/images/home/girl2.jpg" class="girl img-responsive" alt="" />
									<img src="{{url('public')}}/assets/images/home/pricing.png"  class="pricing" alt="" />
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>Free Ecommerce Template</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="{{url('public')}}/assets/images/home/girl3.jpg" class="girl img-responsive" alt="" />
									<img src="{{url('public')}}/assets/images/home/pricing.png" class="pricing" alt="" />
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->

<div class="features_items"><!--features_items-->
<h2 class="title text-center">PRODUK</h2>

	<section id="advertisement">
		<div class="container">
		<div class="products">
                        <div class="row">
                            @foreach ($list_produk as $produk)
                            <div class="col-4 col-md-3 col-lg-3 col-xl-2">
                                <div class="product">
                                    <figure class="product-media">
                                        <a href="{{ url('product', $produk->id) }}">
                                            <img src="{{ url('public') }}/assets/images/home/product1.jpg" alt="Product image" class="product-image">
                                        </a>
										<div class="text-center">
											<a href="cart">
											<button type="button" class="btn btn-fefault cart">
												<i class="fa fa-shopping-cart"></i>
												Tambah Keranjang
											</button>
											</a>
										</div>
                                    </figure><!-- End .product-media -->
                                    <div class="productinfo text-center">
                                        <h5 class="text-warning"><a href="{{ url('product', $produk->id) }}">{{ $produk->nama }}</a></h5>
                                        <div class="text-warning">
                                            <h2>Rp. {{number_format($produk->harga) }}</h2>
                                        </div>
                                    </div>
                                </div><!-- End .product -->
                            </div>
                            @endforeach
                        </div><!-- End .row -->
		</div>
	</section>	
	
</div><!--features_items-->

				</div>
			</div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

    <script src="{{url('public')}}/assets/js/jquery.js"></script>
	<script src="{{url('public')}}/assets/js/bootstrap.min.js"></script>
	<script src="{{url('public')}}/assets/js/jquery.scrollUp.min.js"></script>
	<script src="{{url('public')}}/assets/js/price-range.js"></script>
    <script src="{{url('public')}}/assets/js/jquery.prettyPhoto.js"></script>
    <script src="{{url('public')}}/assets/js/main.js"></script>
</body>
</html>