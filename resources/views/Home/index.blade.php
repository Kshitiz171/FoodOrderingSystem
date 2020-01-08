@include('Home.config.header')
@include('Home.config.nab')


    <!-- END nav -->

         @if(isset($slider_list))
           @foreach($slider_list as $key=>$slider_data)

    <section id="home-section" class="hero">
		  <div class="home-slider owl-carousel">
	      <div class="slider-item" style="background-image: url({{asset('uploads/'.$slider_data->image)}}); ">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

	            <div class="col-md-12 ftco-animate text-center">
	              <h1 class="mb-2">We serve Delicious Foods &amp; Dishes</h1>
	              <h2 class="subheading mb-4">Order anywhere with cheap shipping and quick delivery</h2>
	             
	            </div>

	          </div>
	        </div>
	      </div>
	        </div>
	      </div>
	    </div>
    </section>
    @endforeach
                @endif  
        
    <section class="ftco-section">
			<div class="container">
				<div class="row no-gutters ftco-services">
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-shipped"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Free Shipping</h3>
                <span>On order over Rs. 100</span>
              </div>
            </div>      
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-diet"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Always Fresh</h3>
                <span>Product well package</span>
              </div>
            </div>    
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-award"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Superior Quality</h3>
                <span>Quality Dishes</span>
              </div>
            </div>      
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-customer-service"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Support</h3>
                <span>24/7 Support</span>
              </div>
            </div>      
          </div>
        </div>
			</div>
		</section>

		
    <section class="ftco-section">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Hot Items...</span>
            <h2 class="mb-4">Our Recent Products</h2>
            <p>Hunger?...No longer.Get the best available food in town wherver and whenever you are.</p>
          </div>
        </div>   		
    	</div>
         
    	<div class="container">
    		<div class="row">
           @if(isset($product_list))
           @foreach($product_list as $key=>$product_data)
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">                             
    					<a href="#" class="img-prod"><img class="img-fluid " src="{{asset('uploads/'.$product_data->image)}}" alt="View Details" >    						
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#">{{$product_data->name}}</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="price-sale">Rs. {{$product_data->price}}</span></p>
		    					</div>
	    					</div>
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							<a href="{{route('front.edit',$product_data->id)}}" class="add-to-cart d-flex justify-content-center align-items-center text-center">
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
      <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              
               <ul>
                <li>{{$product_list->links()}}</li>
 
              </ul>

            </div>
          </div>
        </div>
    </section>

		
    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
          	<span class="subheading">Testimony</span>
            <h2 class="mb-4">Our satisfied customer says</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
          </div>
        </div>
        
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
              @if(isset($review_list))
                @foreach($review_list as $key=>$review_data)
              <div class="item">
                
                <div class="testimony-wrap p-4 pb-5">
                
                  <div class="user-img mb-5" style="background-image: url({{asset('uploads/'.$review_data->image)}})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">{{$review_data->description}}</p>
                    <p class="name">{{$review_data->name}}</p>
                    <span class="position">{{$review_data->position}}</span>
                  </div>
                  
                </div>

              </div>
              @endforeach
                  @endif
            </div>
          </div>
        </div>
        
      </div>
    </section>

    <hr>

		<section class="ftco-section ftco-partner">
    	<div class="container">
        <h2 class="mb-4 text-center">View the latest News and Videos</h2>
    		<div class="row">

          @if(isset($video_list))
           @foreach($video_list as $video_data)
    			<div class="col-sm ftco-animate">
            <td>{{$video_data->title}}</td>
    				 <iframe width="240" height="205" src="{{$video_data->link}}" frameborder="0" allowfullscreen></iframe> 
    			</div>
          @endforeach
          @endif
    		</div>
    	</div>
    </section>

		  
    
  

  <!-- loader -->
  @include('Home.config.footer')