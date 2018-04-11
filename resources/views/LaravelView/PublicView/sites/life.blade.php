@extends('LaravelView.PublicView.blocks.templete')
@section('main')
	<div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
		@foreach($items as $item)			
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 post-width site-post">
			<article class="tg-post">
				<figure>
					<img src="{{$item->picture}}" alt="image description">
					<div class="tg-img-hover">
						<div class="holder">
							<a href=""><i class="fa fa-heart" aria-hidden="true" style="color: #f3eeee;" >&nbsp&nbsp{{$item->likes ? $item->likes : '1'}}&nbsp&nbsp</i></a>&nbsp&nbsp
							<a href=""><i class="fa fa-comment" aria-hidden="true" style="color:#f3eeee; margin-left: 20px;">&nbsp&nbsp0&nbsp&nbsp</i></a>
						</div>
					</div>
				</figure>
				<div class="tg-post-content">
					<div  class="name-post">
						<h5><a href=""  ng-click="redirec(post)">{{$item->name}}</a></h5>
					</div>
					
					<div class="post-meta">
						<span class="date">Sep, 17 2015</span>
					</div>
					<div class="description" style="height: 100px;">
						{{$item->preview}}
					</div>
					<a href="" class="tg-btn-countinuereading">countinue reading</a>
					<div class="tg-post-foot">
						<div class="post-meta pull-left">
							<span class="tg-post-author">Post By : <a href="">Ng Ký Lê</a></span>
						</div>
						<div class="post-meta pull-right">
							<span class="tg-post-author"><a href="">0 comments</a></span>
						</div>
					</div>
				</div>
			</article>
		</div>
		@endforeach
		<hr />
		<div style=" clear:both;"></div>
		<div class=" col-md-12 row">
			@if($items->currentPage() >1)
				<div class=" post-width site-post pull-left">
					<span class="older-post"><a href="{{$items->previousPageUrl()}}">newer post</a></span>
				</div>
			@endif
			@if($items->currentPage() < $items->total())
				<div class=" post-width site-post pull-right">
					<span class="older-post"><a href="{{$items->nextPageUrl()}}">older post</a></span>
				</div>
			@endif
		</div>
	</div>
@endsection
@section('angularjs')
	<!-- <script src="resources/assets/public/angularjs_v2/controller/home-ctrl.js"></script> -->
@endsection
