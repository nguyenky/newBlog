@include('LaravelView.PublicView.blocks.header')
		@yield('sub-header')
		<main id="main" class="haslayout">
			<div id="twocolumns" class="container">
				<div class="row">
					@yield('main')
					@include('LaravelView.PublicView.blocks.right-bar')
				</div>
			</div>
		</main>
@include('LaravelView.PublicView.blocks.footer')
