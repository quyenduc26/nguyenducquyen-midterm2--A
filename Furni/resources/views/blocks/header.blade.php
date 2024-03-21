<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" >

			<div class="container">
				<a class="navbar-brand" href="{{ route('home') }}">Furni<span>.</span></a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
						<li class="nav-item ">
							<a class="nav-link" href="{{ route('home') }}">Home</a>
						</li>
						<li><a class="nav-link" href="{{ route('shop') }}">Shop</a></li>
						<li><a class="nav-link" href="">About us</a></li>
						<li><a class="nav-link" href="">Services</a></li>
						<li><a class="nav-link" href="">Blog</a></li>
						<li><a class="nav-link" href="">Contact us</a></li>
					</ul>

					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
						<li><a class="nav-link" href="#"><img src="{{ asset('assets/images/user.svg') }}"></a></li>
						<li><a class="nav-link" href=""><img src="{{ asset('assets/images/cart.svg') }}"></a></li>
					</ul>
				</div>
			</div>
				
		</nav>