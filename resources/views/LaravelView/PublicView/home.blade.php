@extends('LaravelView.PublicView.blocks.templete')
@section('sub-header')
	@include('LaravelView.PublicView.blocks.sub-header')
@endsection
@section('main')
	<div id="content" class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
		<article class="tg-post">
			<figure>
				<img src="{{$news[0]['new']['picture']}}" alt="image description">
				<div class="tg-img-hover">
					<div class="holder">
						<a href=""><i class="fa fa-heart" aria-hidden="true" style="color: #f3eeee;" >&nbsp&nbsp{{$news[0]['new']['likes'] ? $news[0]['new']['likes'] : '1'}}&nbsp&nbsp</i></a>&nbsp&nbsp
						<a href=""><i class="fa fa-comment" aria-hidden="true" style="color:#f3eeee; margin-left: 20px;">&nbsp&nbsp{{count($news[0]['new']['comments'])}}&nbsp&nbsp</i></a>
					</div>
				</div>
			</figure>
			<div class="tg-post-content">
				<div class="post-meta category-name">
					<span><a href="">LifeStyle</a></span>
				</div>
				<h3><a href="" >{{$news[0]['new']['name']}}</a></h3>
				<div class="post-meta">
					<span class="date">{{$news[0]['new']['created_at']}}</span>
				</div>
				<div class="description">
					<p>{{$news[0]['new']['preview']}}</p>			
				</div>
				<a href="" class="tg-btn-countinuereading" ng-click="redirec(life)">countinue reading</a>
				<div class="tg-post-foot">
					<ul class="post-social-icons">
						<li><a href=""><i class="fa fa-facebook"></i></a></li>
						<li><a href=""><i class="fa fa-twitter"></i></a></li>
						<li><a href=""><i class="fa fa-linkedin"></i></a></li>
						<li><a href=""><i class="fa fa-tumblr"></i></a></li>
						<li><a href=""><i class="fa fa-envelope-o"></i></a></li>
					</ul>
					<div class="post-meta pull-right">
						<span class="tg-post-author">Post By : <a href="">Ng Ký Lê</a></span>
					</div>
				</div>
			</div>
		</article>
		<article class="tg-post tg-video-post">
			<div class="video">
				<div>{!! $news[4]['new']['preview'] !!}</div>
			</div>
			<div class="tg-post-content">
				<div class="post-meta category-name">
					<span><a href="">video</a></span>
				</div>
				<h3><a href="">{{$news[4]['new']['name']}}</a></h3>
				<div class="post-meta">
					<span class="date">{{$news[4]['new']['created_at']}}</span>
				</div>
				<div class="description">
					<div>{!! $news[4]['new']['detail'] !!}</div>
				</div>
				<div class="tg-post-foot">
					<ul class="post-social-icons">
						<li><a href=""><i class="fa fa-facebook"></i></a></li>
						<li><a href=""><i class="fa fa-twitter"></i></a></li>
						<li><a href=""><i class="fa fa-linkedin"></i></a></li>
						<li><a href=""><i class="fa fa-tumblr"></i></a></li>
						<li><a href=""><i class="fa fa-envelope-o"></i></a></li>
					</ul>
					<div class="post-meta pull-right">
						<span class="tg-post-author">Post By : <a href="">Ng Ký Lê</a></span>
					</div>
				</div>
			</div>
		</article>
		<article class="tg-post">
			<figure>
				<img src="{{$news[1]['new']['picture']}}" alt="image description">
				<div class="tg-img-hover">
					<div class="holder">
						<a href=""><i class="fa fa-heart" aria-hidden="true" style="color: #f3eeee;" >&nbsp&nbsp{{$news[1]['new']['likes'] ? $news[1]['new']['likes'] : '1'}}&nbsp&nbsp</i></a>&nbsp&nbsp
						<a href=""><i class="fa fa-comment" aria-hidden="true" style="color:#f3eeee; margin-left: 20px;">&nbsp&nbsp{{count($news[1]['new']['comments'])}}&nbsp&nbsp</i></a>
					</div>
				</div>
			</figure>
			<div class="tg-post-content">
				<div class="post-meta category-name">
					<span><a href="">Chilhood</a></span>
				</div>
				<h3><a href="" >{{$news[1]['new']['name']}}</a></h3>
				<div class="post-meta">
					<span class="date">{{$news[1]['new']['created_at']}}</span>
				</div>
				<div class="description">
					<p>{{$news[1]['new']['preview']}}</p>		
				</div>
				<a href="" class="tg-btn-countinuereading">countinue reading</a>
				<div class="tg-post-foot">
					<ul class="post-social-icons">
						<li><a href=""><i class="fa fa-facebook"></i></a></li>
						<li><a href=""><i class="fa fa-twitter"></i></a></li>
						<li><a href=""><i class="fa fa-linkedin"></i></a></li>
						<li><a href=""><i class="fa fa-tumblr"></i></a></li>
						<li><a href=""><i class="fa fa-envelope-o"></i></a></li>
					</ul>
					<div class="post-meta pull-right">
						<span class="tg-post-author">Post By : <a href="">Ng Ký Lê</a></span>
					</div>
				</div>
			</div>
		</article>
		<article class="tg-post">
			<figure>
				<img src="{{$news[2]['new']['picture']}}" alt="image description">
				<div class="tg-img-hover">
					<div class="holder">
						<a href=""><i class="fa fa-heart" aria-hidden="true" style="color: #f3eeee;" >&nbsp&nbsp{{$news[2]['new']['likes'] ? $news[2]['new']['likes'] : '1'}}&nbsp&nbsp</i></a>&nbsp&nbsp
						<a href=""><i class="fa fa-comment" aria-hidden="true" style="color:#f3eeee; margin-left: 20px;">&nbsp&nbsp{{count($news[2]['new']['comments'])}}&nbsp&nbsp</i></a>
					</div>
				</div>
			</figure>
			<div class="tg-post-content">
				<div class="post-meta category-name">
					<span><a href="">TRIP</a></span>
				</div>
				<h3><a href="" >{{$news[2]['new']['name']}}</a></h3>
				<div class="post-meta">
					<span class="date">{{$news[2]['new']['created_at']}}</span>
				</div>
				<div class="description">
					<p>{{$news[2]['new']['preview']}}</p>		
				</div>
				<a href="" class="tg-btn-countinuereading">countinue reading</a>
				<div class="tg-post-foot">
					<ul class="post-social-icons">
						<li><a href=""><i class="fa fa-facebook"></i></a></li>
						<li><a href=""><i class="fa fa-twitter"></i></a></li>
						<li><a href=""><i class="fa fa-linkedin"></i></a></li>
						<li><a href=""><i class="fa fa-tumblr"></i></a></li>
						<li><a href=""><i class="fa fa-envelope-o"></i></a></li>
					</ul>
					<div class="post-meta pull-right">
						<span class="tg-post-author">Post By : <a href="">Ng Ký Lê</a></span>
					</div>
				</div>
			</div>
		</article>
		<article class="tg-post tg-audio-post">
			<div class="audio">
				<div>{!! $news[5]['new']['preview'] !!}</div>
			</div>
			<div class="tg-post-content">
				<div class="post-meta category-name">
					<span><a href="">audio</a></span>
				</div>
				<h3><a href="">{{$news[5]['new']['name']}}</a></h3>
				<div class="post-meta">
					<span class="date">{{$news[5]['new']['created_at']}}</span>
				</div>
				<div class="description">
					<div>{!! $news[4]['new']['detail'] !!}</div>
				</div>
				<div class="tg-post-foot">
					<ul class="post-social-icons">
						<li><a href=""><i class="fa fa-facebook"></i></a></li>
						<li><a href=""><i class="fa fa-twitter"></i></a></li>
						<li><a href=""><i class="fa fa-linkedin"></i></a></li>
						<li><a href=""><i class="fa fa-tumblr"></i></a></li>
						<li><a href=""><i class="fa fa-envelope-o"></i></a></li>
					</ul>
					<div class="post-meta pull-right">
						<span class="tg-post-author">Post By : <a href="">Ng Ký Lê</a></span>
					</div>
				</div>
			</div>
		</article>
		<article class="tg-post">
			<figure>
				<img src="{{$news[3]['new']['picture']}}" alt="image description">
				<div class="tg-img-hover">
					<div class="holder">
						<a href=""><i class="fa fa-heart" aria-hidden="true" style="color: #f3eeee;" >&nbsp&nbsp{{$news[3]['new']['likes'] ? $news[6]['new']['likes'] : '1'}}&nbsp&nbsp</i></a>&nbsp&nbsp
						<a href=""><i class="fa fa-comment" aria-hidden="true" style="color:#f3eeee; margin-left: 20px;">&nbsp&nbsp{{count($news[2]['new']['comments'])}}&nbsp&nbsp</i></a>
					</div>
				</div>
			</figure>
			<div class="tg-post-content">
				<div class="post-meta category-name">
					<span><a href="">HISTORY</a></span>
				</div>
				<h3><a href="" >{{$news[3]['new']['name']}}</a></h3>
				<div class="post-meta">
					<span class="date">{{$news[3]['new']['created_at']}}</span>
				</div>
				<div class="description">
					<p>{{$news[3]['new']['preview']}}</p>		
				</div>
				<a href="" class="tg-btn-countinuereading">countinue reading</a>
				<div class="tg-post-foot">
					<ul class="post-social-icons">
						<li><a href=""><i class="fa fa-facebook"></i></a></li>
						<li><a href=""><i class="fa fa-twitter"></i></a></li>
						<li><a href=""><i class="fa fa-linkedin"></i></a></li>
						<li><a href=""><i class="fa fa-tumblr"></i></a></li>
						<li><a href=""><i class="fa fa-envelope-o"></i></a></li>
					</ul>
					<div class="post-meta pull-right">
						<span class="tg-post-author">Post By : <a href="">Ng Ký Lê</a></span>
					</div>
				</div>
			</div>
		</article>
		<article class="tg-post">
			<figure>
				<img src="{{$news[3]['new']['picture']}}" alt="image description">
				<div class="tg-img-hover">
					<div class="holder">
						<a href=""><i class="fa fa-heart" aria-hidden="true" style="color: #f3eeee;" >&nbsp&nbsp{{$news[6]['new']['likes'] ? $news[6]['new']['likes'] : '1'}}&nbsp&nbsp</i></a>&nbsp&nbsp
						<a href=""><i class="fa fa-comment" aria-hidden="true" style="color:#f3eeee; margin-left: 20px;">&nbsp&nbsp{{count($news[6]['new']['comments'])}}&nbsp&nbsp</i></a>
					</div>
				</div>
			</figure>
			<div class="tg-post-content">
				<div class="post-meta category-name">
					<span><a href="">HISTORY COLLECTED</a></span>
				</div>
				<h3><a href="" >{{$news[6]['new']['name']}}</a></h3>
				<div class="post-meta">
					<span class="date">{{$news[6]['new']['created_at']}}</span>
				</div>
				<div class="description">
					<p>{{$news[6]['new']['preview']}}</p>		
				</div>
				<a href="" class="tg-btn-countinuereading">countinue reading</a>
				<div class="tg-post-foot">
					<ul class="post-social-icons">
						<li><a href=""><i class="fa fa-facebook"></i></a></li>
						<li><a href=""><i class="fa fa-twitter"></i></a></li>
						<li><a href=""><i class="fa fa-linkedin"></i></a></li>
						<li><a href=""><i class="fa fa-tumblr"></i></a></li>
						<li><a href=""><i class="fa fa-envelope-o"></i></a></li>
					</ul>
					<div class="post-meta pull-right">
						<span class="tg-post-author">Post By : <a href="">Ng Ký Lê</a></span>
					</div>
				</div>
			</div>
		</article> 

		<div class="next-previous">
			<span class="older-post"><a href="#">older post</a></span>
		</div>
	</div>
@endsection
