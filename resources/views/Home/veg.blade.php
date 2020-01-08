@include('Home.config.header')
@include('Home.config.nab')

    <!-- END nav -->

   

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-10 mb-5 text-center">
    				<ul class="product-category">
    					<li><a href="{{url('front/create')}}">All</a></li>
    					<li><a href="{{url('veg')}}" class="active">Vegetarian</a></li>
    					<li><a href="{{url('nonveg')}}">Non-Vegetarian</a></li>
    				</ul>
    			</div>
    		</div>
    		<div class="row">
                @if(isset($product_list))
                    @foreach($product_list as $key=>$product_info)
    			<div class="col-md-6 col-lg-3 ftco-animate">
                    
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="{{asset('uploads/'.$product_info->image)}}" alt="Colorlib Template">
    						
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">{{$product_info->name}}</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="price-sale">Rs. {{$product_info->price}}</span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="{{route('front.edit',$product_info->id)}}" class="add-to-cart d-flex justify-content-center align-items-center text-center">
	    								<span><i class="ion-ios-menu"></i></span>
	    							</a>
	    							<a href="{{route('front.addToCart',['id'=>$product_data->id])}}" class="buy-now d-flex justify-content-center align-items-center mx-1">
	    								<span><i class="ion-ios-cart"></i></span>
	    							</a>
	    							<a href="#" class="heart d-flex justify-content-center align-items-center ">
	    								<span><i class="ion-ios-heart"></i></span>
	    							</a>
    							</div>
    						</div>
    					</div>
    				</div>
                      
    			</div>
                @endforeach
                      @endif 
    		</div>
    		
    	</div>
    </section>


  <!-- loader -->
  @include('Home.config.footer')