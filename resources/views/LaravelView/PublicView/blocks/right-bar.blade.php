<aside id="sidebar" class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-6  col-xs-6 widget-width">
								<div class="tg-widget">
									<h4><span>about me</span></h4>
									<div class="about-widget">
										<div class="author-img">
											<img src="images/author.jpg" alt="image description">
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
									<img src="images/placeholder.jpg" alt="image description">
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
														<img src="images/thumbnails/01-img.jpg" alt="image description">
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
														<img src="images/thumbnails/02-img.jpg" alt="image description">
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
														<img src="images/thumbnails/03-img.jpg" alt="image description">
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
														<img src="images/thumbnails/04-img.jpg" alt="image description">
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
										@foreach($instagram as $key=>$in)
											<!-- <a href="">{{$key}}</a> -->
											@if($key < 9)
											<li><a href="#"><img src="{{$in['images']['thumbnail']['url']}}" alt="image description"></a></li>
											@endif
										@endforeach
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
												<i>(98sadsdsad52)</i>
											</a>
										</li>
									</ul>
								</div>
							</div>

						</div>
					</aside>
