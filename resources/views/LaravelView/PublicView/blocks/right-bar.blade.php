<aside id="sidebar" class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-6  col-xs-6 widget-width">
								<div class="tg-widget">
									<h4><span>about me</span></h4>
									<div class="about-widget">
										<div class="author-img">
											<img src="{{$profile->avatar}}" alt="avatar">
										</div>
										<div class="description">
											{{$profile->preview}}
										</div>
										<a class="tg-btn-countinuereading" href="https://www.facebook.com/ky.nguyenkyle" target="_blank">more infomation</a>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-6  col-xs-6 widget-width">
								<div class="tg-widget add">
									<img src="{{$instagram[0]['images']['standard_resolution']['url']}}" alt="image description">
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-6  col-xs-6 widget-width">
								<div class="tg-widget tg-recent-post">
									<h4><span>Recent post</span></h4>
									<div class="recent-post">
										<ul>
											@foreach($instagram as $key=>$in)
												@if($key > 0 && $key <4 )
													<li>
														<div class="post-thumb">
															<a href="{{$in['link']}}" target="_blank">
																<!-- <img ng-src="{{$in['images']['standard_resolution']['url']}}" alt="image description"> -->
																<img src="{{$in['images']['standard_resolution']['url']}}" alt="image description">
															</a>
														</div>
													</li>
												@endif
											@endforeach
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
											@if($key > 3 && $key <13)
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
										@foreach($categories as $cat)
										<li>
											<a href="#">
												<em>{{$cat->name}}</em>
												<i>{{count($cat->news)}}</i>
											</a>
										</li>
										@endforeach

									</ul>
								</div>
							</div>
						</div>
					</aside>
