
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
	<title>Yes ! For me !!!</title>
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<!-- ------------Defaulf-------------- -->
	<link rel="stylesheet" href="resources/assets/public/css/bootstrap.min.css">
	<!-- <link rel="stylesheet" href="resources/assets/public/css/font-awesome.min.css"> -->
	<link href="resources/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="resources/assets/public/css/owl.carousel.css">
	<link rel="stylesheet" href="resources/assets/public/css/owl.theme.css">
	<link rel="stylesheet" href="resources/assets/public/css/transitions.css">
	<link rel="stylesheet" href="resources/assets/public/css/main.css">
	<link rel="stylesheet" href="resources/assets/public/css/responsive.css">
	<script src="resources/assets/public/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
	<!-- --------Defaulf------------ -->
</head>
<body data-ng-app="app" ng-controller="MyAppCtrl">
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<div id="sliding" class="sliding">
		<div class="container">
			<a href="#" class="show_hide fa fa-close pull-right"></a>
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
							<div class="item" ng-repeat="d in demo">
								<p>asdsad</p>
							</div>
							<!-- <div class="item">
								<p>The Latest New For Your New Post</p>
							</div>
							<div class="item">
								<p>The Latest New For Your New Post</p>
							</div> -->
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
						<a href="#">
							<img src="resources/assets/public/images/logo.png" alt="The Success BLOG for Real LifeStyle">
						</a>
					</strong>
					<span class="slogn">For Real LifeStyle</span>
				</div>
				<div class="text-center">
					<div ng-bind-html="trustAsHtml((postMain.caption))"></div>
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
		<div class="tg-banner haslayout">
			<div class="container">
				<div id="home-slider" class="home-slider">
					<div class="item">
						<div class="tg-banner-poststyle">
							<figure>
								<a href="#">
									<img ng-src="{{postMain.url ? postMain.url : 'storage/app/public/default.jpg'}}" alt="image description">
								</a>
							</figure>
							<!-- <div class="post-content">
								<div class="display-table">
									<div class="display-table-cell">
										<div class="post-meta">
											<span><a href="#">LifeStyle</a></span>
											<span>Sep, 17 2015</span>
										</div>
										<div class="title">
											<h1>What Do You Think Of <span>LifeStyle</span></h1>
										</div>
										<div class="post-meta no-padding">
											<span>
												<a href="#">
													<i class="fa fa-user"></i>
													<em>Jhone Smithon</em>
												</a>
											</span>
											<span>
												<a href="#">
													<i class="fa fa-comment"></i>
													<em>No Comments Yet</em>
												</a>
											</span>
										</div>
									</div>
								</div>
							</div> -->
						</div>
					</div>
					<!-- <div class="item">
						<div class="tg-banner-poststyle">
							<figure>
								<a href="#">
									<img src="resources/assets/public/images/01-img.jpg" alt="image description">
								</a>
							</figure>
							<div class="post-content">
								<div class="display-table">
									<div class="display-table-cell">
										<div class="post-meta">
											<span><a href="#">LifeStyle</a></span>
											<span>Sep, 17 2015</span>
										</div>
										<div class="title">
											<h1>What Do You Think Of <span>LifeStyle</span></h1>
										</div>
										<div class="post-meta no-padding">
											<span>
												<a href="#">
													<i class="fa fa-user"></i>
													<em>Jhone Smithon</em>
												</a>
											</span>
											<span>
												<a href="#">
													<i class="fa fa-comment"></i>
													<em>No Comments Yet</em>
												</a>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="tg-banner-poststyle">
							<figure>
								<a href="#">
									<img src="resources/assets/public/images/01-img.jpg" alt="image description">
								</a>
							</figure>
							<div class="post-content">
								<div class="display-table">
									<div class="display-table-cell">
										<div class="post-meta">
											<span><a href="#">LifeStyle</a></span>
											<span>Sep, 17 2015</span>
										</div>
										<div class="title">
											<h1>What Do You Think Of <span>LifeStyle</span></h1>
										</div>
										<div class="post-meta no-padding">
											<span>
												<a href="#">
													<i class="fa fa-user"></i>
													<em>Jhone Smithon</em>
												</a>
											</span>
											<span>
												<a href="#">
													<i class="fa fa-comment"></i>
													<em>No Comments Yet</em>
												</a>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> -->
				</div>
				<div class="tg-newsupdate">
					<!-- <div class="title-box">
						<h2>Subscribed us for latest news</h2>
						<span>We will send you Blog Updates</span>
					</div>
					<form class="tg-latestnewsform">
						<fieldset>
							<div class="col-sm-5 form-group">
								<input type="text" name="name" placeholder="Name..." class="form-control">
							</div>
							<div class="col-sm-5 form-group">
								<input type="email" name="email" placeholder="Email Address..." class="form-control">
							</div>
							<div class="col-sm-2 form-group">
								<button type="submit">Submit</button>
							</div>
						</fieldset>
					</form> -->
				</div>
				<div id="categories-slider" class="tg-categories">
					<div class="item">
						<div class="tg-category">
							<figure>
								<a href="#">
									<img ng-src="{{postExtra1.url ? postExtra1.url : 'storage/app/public/default.jpg'}}" alt="image description">
								</a>
							</figure>
							<div class="category-content">
								<div class="display-table">
									<div class="display-table-cell">
										<div class="post-meta">
											<span><a href="#">LifeStyle</a></span>
											<span>{{ postExtra1.created_at | amCalendar:referenceTime:formats}}</span>
										</div>
										<div class="description  post-meta">
											<div ng-bind-html="trustAsHtml((postExtra1.caption))"></div>
										</div>
										<div class="post-meta no-padding">
											<span>
												<a href="#">
													<i class="fa fa-user"></i>
													<em>Ng Ký Lê</em>
												</a>
											</span>
											<span>
												<a href="#">
													<i class="fa fa-comment"></i>
													<em>No Comments Yet</em>
												</a>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="tg-category">
							<figure>
								<a href="#">
									<img ng-src="{{postExtra2.url ? postExtra2.url : 'storage/app/public/default.jpg'}}" alt="image description">
								</a>
							</figure>
							<div class="category-content">
								<div class="display-table">
									<div class="display-table-cell">
										<div class="post-meta">
											<span><a href="#">LifeStyle</a></span>
											<span>{{ postExtra2.created_at | amCalendar:referenceTime:formats}}</span>
										</div>
										<div class="description post-meta">
											<div ng-bind-html="trustAsHtml((postExtra2.caption))"></div>
										</div>
										<div class="post-meta no-padding">
											<span>
												<a href="#">
													<i class="fa fa-user"></i>
													<em>Ng Ký Lê</em>
												</a>
											</span>
											<span>
												<a href="#">
													<i class="fa fa-comment"></i>
													<em>No Comments Yet</em>
												</a>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="tg-category">
							<figure>
								<a href="#">
									<img ng-src="{{postExtra3.url ? postExtra3.url : 'storage/app/public/default.jpg'}}" alt="image description">
								</a>
							</figure>
							<div class="category-content">
								<div class="display-table">
									<div class="display-table-cell">
										<div class="post-meta">
											<span><a href="#">LifeStyle</a></span>
											<span>{{ postExtra3.created_at | amCalendar:referenceTime:formats}}</span>
										</div>
										<div class="description post-meta">
											<div ng-bind-html="trustAsHtml((postExtra3.caption))"></div>
										</div>
										<div class="post-meta no-padding">
											<span>
												<a href="#">
													<i class="fa fa-user"></i>
													<em>Ng Ký Lê</em>
												</a>
											</span>
											<span>
												<a href="#">
													<i class="fa fa-comment"></i>
													<em>No Comments Yet</em>
												</a>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<main id="main" class="haslayout">
			<div id="twocolumns" class="container">
				<div class="row">
					<div data-ui-view=""></div>
					<aside id="sidebar" class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-6  col-xs-6 widget-width">
								<div class="tg-widget">
									<h4><span>about me</span></h4>
									<div class="about-widget">
										<div class="author-img">
											<img src="resources/assets/public/images/author.jpg" alt="image description">
										</div>
										<div class="description">
											<p>Tonx cray is a commodo, exercitation you probaly a is haven’t heard of them beard cred. Base  Selfies Kickstarter.</p>
										</div>
										<a class="tg-btn-countinuereading" href="#">countinue reading</a>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-6  col-xs-6 widget-width">
								<div class="tg-widget add">
									<img src="resources/assets/public/images/placeholder.jpg" alt="image description">
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-6  col-xs-6 widget-width">
								<div class="tg-widget tg-recent-post">
									<h4><span>Recent post</span></h4>
									<div class="recent-post">
										<ul>
											<li>
												<div class="post-thumb">
													<a href="#">
														<img src="resources/assets/public/images/thumbnails/01-img.jpg" alt="image description">
													</a>
												</div>
												<div class="post-data">
													<h5><a href="#">Beauty Of Nature</a></h5>
													<span class="author-name">By: <a href="#">Rick Allenson</a></span>
													<span class="date">Sep, 05 2015</span>
												</div>
											</li>
											<li>
												<div class="post-thumb">
													<a href="#">
														<img src="resources/assets/public/images/thumbnails/02-img.jpg" alt="image description">
													</a>
												</div>
												<div class="post-data">
													<h5><a href="#">Beauty Of Nature</a></h5>
													<span class="author-name">By: <a href="#">Rick Allenson</a></span>
													<span class="date">Sep, 05 2015</span>
												</div>
											</li>
											<li>
												<div class="post-thumb">
													<a href="#">
														<img src="resources/assets/public/images/thumbnails/03-img.jpg" alt="image description">
													</a>
												</div>
												<div class="post-data">
													<h5><a href="#">Beauty Of Nature</a></h5>
													<span class="author-name">By: <a href="#">Rick Allenson</a></span>
													<span class="date">Sep, 05 2015</span>
												</div>
											</li>
											<li>
												<div class="post-thumb">
													<a href="#">
														<img src="resources/assets/public/images/thumbnails/04-img.jpg" alt="image description">
													</a>
												</div>
												<div class="post-data">
													<h5><a href="#">Beauty Of Nature</a></h5>
													<span class="author-name">By: <a href="#">Rick Allenson</a></span>
													<span class="date">Sep, 05 2015</span>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-6  col-xs-6 widget-width">
								<div class="tg-widget tg-instagram">
									<h4><span>Instagram</span></h4>
									<ul class="instagram-plugin">
										<li><a href="#"><img src="resources/assets/public/images/thumbnails/05-img.jpg" alt="image description"></a></li>
										<li><a href="#"><img src="resources/assets/public/images/thumbnails/06-img.jpg" alt="image description"></a></li>
										<li><a href="#"><img src="resources/assets/public/images/thumbnails/07-img.jpg" alt="image description"></a></li>
										<li><a href="#"><img src="resources/assets/public/images/thumbnails/08-img.jpg" alt="image description"></a></li>
										<li><a href="#"><img src="resources/assets/public/images/thumbnails/09-img.jpg" alt="image description"></a></li>
										<li><a href="#"><img src="resources/assets/public/images/thumbnails/10-img.jpg" alt="image description"></a></li>
										<li><a href="#"><img src="resources/assets/public/images/thumbnails/11-img.jpg" alt="image description"></a></li>
										<li><a href="#"><img src="resources/assets/public/images/thumbnails/12-img.jpg" alt="image description"></a></li>
										<li><a href="#"><img src="resources/assets/public/images/thumbnails/13-img.jpg" alt="image description"></a></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-6  col-xs-6 widget-width">
								<div class="tg-widget tg-search">
									<form class="tg-search-form">
										<fieldset>
											<input type="search" name="search" class="form-control" placeholder="Search Here...">
											<button type="submit"><i class="fa fa-search"></i></button>
										</fieldset>
									</form>
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-6  col-xs-6 widget-width">
								<div class="tg-widget tg-category">
									<h4><span>Blog Catagories</span></h4>
									<ul class="blog-category">
										<li>
											<a href="#">
												<em>Awesome Travelling</em>
												<i>(598)</i>
											</a>
										</li>
										<li>
											<a href="#">
												<em>Daily Life Routeen</em>
												<i>(1058)</i>
											</a>
										</li>
										<li>
											<a href="#">
												<em>Amazing Food</em>
												<i>(42)</i>
											</a>
										</li>
										<li>
											<a href="#">
												<em>Fashion</em>
												<i>(158)</i>
											</a>
										</li>
										<li>
											<a href="#">
												<em>Lifestyle</em>
												<i>(4058)</i>
											</a>
										</li>
										<li>
											<a href="#">
												<em>Politics</em>
												<i>(958)</i>
											</a>
										</li>
										<li>
											<a href="#">
												<em>Miscellenious</em>
												<i>(9852)</i>
											</a>
										</li>
									</ul>
								</div>
							</div>
							
						</div>
					</aside>
				</div>
			</div>
		</main>
		<footer id="footer" class="haslayout">
			<div class="plugin-instagram">
				<div class="container-fluid">
					<div class="row">
						<h4>Follow Me On Instagram</h4>
						<div id="instagram-gallery" class="instagram-gallery">
							<div class="item"><a href="#"><img src="resources/assets/public/images/15-img.jpg" alt="image description"></a></div>
							<div class="item"><a href="#"><img src="resources/assets/public/images/16-img.jpg" alt="image description"></a></div>
							<div class="item"><a href="#"><img src="resources/assets/public/images/17-img.jpg" alt="image description"></a></div>
							<div class="item"><a href="#"><img src="resources/assets/public/images/18-img.jpg" alt="image description"></a></div>
							<div class="item"><a href="#"><img src="resources/assets/public/images/19-img.jpg" alt="image description"></a></div>
							<div class="item"><a href="#"><img src="resources/assets/public/images/20-img.jpg" alt="image description"></a></div>
							<div class="item"><a href="#"><img src="resources/assets/public/images/21-img.jpg" alt="image description"></a></div>
						</div>
					</div>
				</div>
			</div>
			<div class="three-columns">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 box-width">
							<div class="box">
								<h5>About Us</h5>
								<div class="description">
									<p>On the other hand, we denounce with righteous nation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble and pain.</p>
								</div>
								<ul class="social-icon">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram"></i></a></li>
									<li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
									<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
									<li><a href="#"><i class="fa fa-tumblr"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 box-width">
							<div class="box">
								<h5>Instagram</h5>
								<div class="instagram">
									<div class="item"><a href="#"><img src="resources/assets/public/images/15-img.jpg" alt="image description"></a></div>
									<div class="item"><a href="#"><img src="resources/assets/public/images/16-img.jpg" alt="image description"></a></div>
									<div class="item"><a href="#"><img src="resources/assets/public/images/17-img.jpg" alt="image description"></a></div>
									<div class="item"><a href="#"><img src="resources/assets/public/images/18-img.jpg" alt="image description"></a></div>
									<div class="item"><a href="#"><img src="resources/assets/public/images/19-img.jpg" alt="image description"></a></div>
									<div class="item"><a href="#"><img src="resources/assets/public/images/20-img.jpg" alt="image description"></a></div>
									<div class="item"><a href="#"><img src="resources/assets/public/images/21-img.jpg" alt="image description"></a></div>
									<div class="item"><a href="#"><img src="resources/assets/public/images/15-img.jpg" alt="image description"></a></div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 box-width">
							<div class="box">
								<h5>NewsLetter</h5>
								<div class="description">
									<p>On the other hand, we denounce with righteous nation and dislike men .</p>
								</div>
								<form class="form-newsletter">
									<fieldset>
										<div class="form-group"><input type="text" name="name" class="form-control" placeholder="Your Name"></div>
										<div class="form-group"><input type="email" name="email" class="form-control" placeholder="Email Address"></div>
										<div class="form-group"><button type="submit">Subscribed Newsletter</button></div>
									</fieldset>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="copyright">
				<div class="container">
					<p>Copyright &copy; 2017 - Author : Ng Ký Lê</p>
				</div>
			</div>
		</footer>
	</div>

	<script src="resources/assets/admin/js/bootstrap/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="resources/assets/admin/js/bootstrap/bootstrap.min.js"></script>
    <!-- Angular -->
    <script src="node_modules/angular/angular.js"></script>
    <script src="node_modules/angular-ui-router/release/angular-ui-router.min.js"></script>
    <script src="node_modules/oclazyload/dist/ocLazyLoad.js"></script>
    <script src="bower_components/angular-sanitize/angular-sanitize.js"></script>
    <script src="bower_components/moment/moment.js"></script>
    <script src="bower_components/angular-moment/angular-moment.min.js"></script>
    <script src="resources/assets/admin/js/modules/underscore.js"></script>
    <script src="node_modules/ngstorage/ngStorage.js"></script>
    <!-- End Angular  -->
	<script src="resources/assets/public/angularjs/app.js"></script>
	<script src="resources/assets/public/angularjs/config.lazyload.js"></script>
	<script src="resources/assets/public/angularjs/config-public.js"></script>
	<script src="resources/assets/public/angularjs/service.js"></script>
	<script src="resources/assets/public/angularjs/main.js"></script>
	
	
    <!-- main -->
    <!-- End main -->
	<!---------- Defaulf ---------->
	<!-- <script src="resources/assets/public/js/vendor/jquery-1.11.3.min.js"></script> -->
	<!-- <script src="resources/assets/public/js/vendor/bootstrap.min.js"></script> -->
	<script src="resources/assets/public/js/owl.carousel.js"></script>
	<script src="resources/assets/public/js/isotope.pkgd.min.js"></script>
	<script src="resources/assets/public/js/isotop.js"></script>
	<script src="resources/assets/public/js/theia-sticky-sidebar.js"></script>
	<!-- <script src="http://maps.google.com/maps/api/js?sensor=false"></script> -->
	<!-- <script src="js/gmap3.min.js"></script> -->
	<script src="resources/assets/public/js/main.js"></script>
	<!-- ------------End defaulf---------- -->
</body>
</html>