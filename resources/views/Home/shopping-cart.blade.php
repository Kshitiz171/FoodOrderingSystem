@include('Home.config.header')
@include('Home.config.nab')
    <!-- END nav -->

    
    <section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
              
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
                    
						        
						        <th>Image</th>
						        <th>Product name</th>
						        <th>Price</th>
						        <th>Quantity</th>
                    <th>Reduce / Add More  </th>
						        <th>Total</th>
						      </tr>
						    </thead>
						    <tbody>
                  @if(Session::has('cart'))
                  @if(isset($products))
                  @foreach($products as $product)
						      <tr class="text-center">

						        
						        
						        <td class="image-prod">
                      <div class="img" style="background-image:url(images/product-3.jpg);">
                        <img class="img-fluid" src="{{asset('uploads/'.$product['image'])}}" alt="View Details">
                      </div></td>
						        
						        <td class="product-name">
						        	<h3>{{$product['name']}}</h3>
						        	<p>{{$product['description']}}</p>

						        </td>
						        
						        <td>Rs {{$product['price']}}</td>
                    <td>{{$product['qty']}}</td>

                    <td >
                    
                      <a href="{{route('front.reduceByOne', ['id'=>$product['item']['id']])}}" class="btn btn-primary py-3 px-4" ><i class="fa fa-minus"></i></a>
                      /
                      <a href="{{route('front.addByOne', ['id'=>$product['item']['id']])}}" class="btn btn-primary py-3 px-4"><i class="fa fa-plus"></i></a>
                      
                         
                    </td>
                    
						        <td>Rs {{$totalPrice}}</td>
						      </tr><!-- END TR-->

						     <!-- END TR-->
                 @endforeach
                 @else
                 @endif
              @endif
                 
						    </tbody>
						  </table>
              
					  </div>
    			</div>
    		</div>
        
    		<div class="row justify-content-end">
    			<div class="col-lg-7">
            <img src="{{URL::asset('User/images/cheff.jpg')}}" style="height: 300px; width: 300px;">
          </div>
    			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
              
              <h3>Cart Totals</h3>
              @if(Session::has('cart'))    
                  @foreach($products as $product)
              <p class="d-flex">
                <span>Number of Item</span>
                <span>{{$product['qty']}} {{$product['name']}}  </span>
              </p>
              @endforeach
              @endif
              <p class="d-flex">
                <span>Delivery</span>
                <span>Rs. 100</span>
              </p> 
              <hr>
              @if(Session::has('cart'))    
                  
              <p class="d-flex total-price">
                <span>Total Price</span>
                <span>Rs {{$totalPrice}}</span>
              </p>
              @endif
            </div>
            <p><a href="{{url('/checkout')}}" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
    			</div>
    			
    		</div>
			</div>
		</section>

	
  <!-- loader -->
 @include('Home.config.footer')