<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang=""> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BootStrap HTML5 CSS3 Theme</title>
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css">

	<link href="resources/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="resources/assets/public/css/owl.carousel.css">
	<link rel="stylesheet" href="resources/assets/public/css/owl.theme.css">
	<link rel="stylesheet" href="resources/assets/public/css/transitions.css">
	<link rel="stylesheet" href="resources/assets/public/css/main.css">
	<link rel="stylesheet" href="resources/assets/public/css/responsive.css">
	<script src="resources/assets/public/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body>
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<div id="sliding" class="sliding">
		<div class="container">
			<a href="" class="show_hide fa fa-close pull-right"></a>
			<form class="header-search-form">
				<fieldset>
					<input type="text" class="form-control" placeholder="Search here...">
				</fieldset>
			</form>
		</div>
	</div>
	<div id="wrapper">
		<header id="header" class="tg-header haslayout">
			<div class="topbar haslayout">
				<div class="container">
					<div class="new-slides pull-left col-lg-4 col-md-5 col-sm-6 col-xs-6">
						<div id="news-slider">
							<div class="item">
								<p>The Latest New For Your New Post</p>
							</div>
							<div class="item">
								<p>The Latest New For Your New Post</p>
							</div>
							<div class="item">
								<p>The Latest New For Your New Post</p>
							</div>
						</div>
					</div>
					<div class="search-social pull-right">
						<ul class="social-icon">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
							<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
							<li><a href="#"><i class="fa fa-tumblr"></i></a></li>
						</ul>
						<a href="#" class="btn-search fa fa-search show_hide"></a>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="container">
				<div class="logo-box haslayout">
					<strong class="logo">
						<a  href="/v2">
							<img src="resources/assets/public/images/yesforme.jpg" alt="The Success BLOG for Real LifeStyle">
						</a>
					</strong>
					<!-- @foreach($instagram as $key=>$in)
						<a href="">{{$key}}</a>
					@endforeach -->

					<!-- <span class="slogn">{{$status['caption']}}</span> -->
				</div>
				<div class="text-center" style="margin-bottom: 1em;"">
					<div>{!! $status['caption'] !!}</div>
				</div>
			</div>
			<nav id="nav" class="navbar navbar-default">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li class="active">
								<a href="index.html">Home</a>
								<ul class="dropdown-menu">
									<li><a href="index.html">Home</a></li>
									<li class="active"><a href="index-slider.html">Home slider</a></li>
									<li><a href="index-masonry.html">Home Masnory</a></li>
									<li><a href="index-three-columns.html">Home Three Columns</a></li>
									<li><a href="single.html">Single</a></li>
									<li><a href="index-fixnav.html">Sticky Nav</a></li>
								</ul>
							</li>
							<li><a href="aboutus.html">about us</a></li>
							<li><a href="contactus.html">Contact</a></li>
							<li>
								<a href="#">Post Type</a>
								<ul class="dropdown-menu">
									<li><a href="simple-post.html">Post</a></li>
									<li><a href="gallery-post.html">Gallery Poast</a></li>
									<li><a href="slider-post.html">Slider Post</a></li>
									<li><a href="video-post.html">Video Post</a></li>
									<li><a href="audio-post.html">Audio Post</a></li>
									<li><a href="img-blockquote-post.html">image Blockquote post</a></li>
									<li><a href="blockquote-post.html">Blockquote post</a></li>
									<li><a href="text-post.html">text post</a></li>
								</ul>
							</li>
							<li><a href="#">LifeStyle</a></li>
							<li><a href="#">Style &amp; Beauty</a></li>
							<li><a href="#">Home &amp; Living</a></li>
							<li><a href="#">everyday life &amp; inspirations</a></li>
							<li><a href="#">Travel</a></li>
							<li class="dropdown">
								<a href="#">Dropdown</a>
								<ul class="dropdown-menu">
									<li><a href="#">LifeStyle</a></li>
									<li><a href="#">Style &amp; Beauty</a></li>
									<li><a href="#">Home &amp; Living</a></li>
									<li><a href="#">everyday life &amp; inspirations</a></li>
									<li><a href="#">Travel</a></li>
									<li><a href="#">Contact</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
