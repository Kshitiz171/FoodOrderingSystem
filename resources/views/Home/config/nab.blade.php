<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="{{route('front.index')}}">Food Delivery</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="{{route('front.index')}}" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="{{route('front.create')}}" class="nav-link">View Full Menu</a></li>
	          <li class="nav-item"><a href="#" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="#" class="nav-link">Blog</a></li>

	          <li class="nav-item cta cta-colored"><a href="{{route('front.shoppingCart')}}" class="nav-link">
	          	<span class="icon-shopping_cart">{{Session::has('cart') ? Session::get('cart')->totalQty : ''}}</span>
	          </a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
    