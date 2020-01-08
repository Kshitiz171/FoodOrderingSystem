@include('Home.config.header')
@include('Home.config.nab')

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7 ftco-animate">
						<form action="{{route('front.store')}}" class="billing-form" method="post">
							@csrf
							<h3 class="mb-4 billing-heading" >Billing Details</h3>

							<div class="row align-items-end">
	          		<div class="col-md-12">
	                <div class="form-group">
	                	
	                  <div id="googleMap" style="width:100%;height:400px;"></div>
	                </div>
	              </div>
	              
                </div>

	          	<div class="row align-items-end">
	          		<div class="col-md-6">
	                <div class="form-group">
	                	<label for="firstname">Firt Name:</label>
	                  <input type="text" class="form-control" placeholder="" name="frstname">
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="lastname">Last Name:</label>
	                  <input type="text" class="form-control" placeholder="" name="lstname">
	                </div>
                </div>
                
		            <div class="w-100"></div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="streetaddress">Delivery Area:</label>
	                  <input type="text" class="form-control" placeholder="Area for delivering food" name="area">
	                </div>
		            </div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                  
	                </div>
		            </div>
		            <div class="w-100"></div>
		            
		            <div class="w-100"></div>
		            <div class="col-md-6">
	                <div class="form-group">
	                	<label for="phone">Phone:</label>
	                  <input type="text" class="form-control" placeholder="" name="phone">
	                </div>
	              </div>
	              <div class="col-md-6">
	                
                </div>
                <div class="w-100"></div>
                <div class="cart-detail p-3 p-md-4">
	          			<div class="form-group">Delivery Charges [NRs 100 - 200] will be based on your provided location.
We will call you back on provided number for order confirmation.</div>
									<div class="col-md-6">
		            	<div class="form-group">
	                	<label for="streetaddress">Promo Code:</label>
	                  <input type="text" class="form-control" placeholder="Number sent on your mobile">
	                </div>
		            </div>
									<p><button name="submit" type="submit" class="btn btn-space btn-primary">Submit</button></p>
								</div>
               
	            </div>
	          </form><!-- END -->
					</div>
					<div class="col-xl-5">
	          <div class="row mt-5 pt-3">
	          	<div class="col-md-12 d-flex mb-5">
	          		<div class="cart-detail cart-total p-3 p-md-4">
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
	          	</div>
	          	<div class="col-md-12">
	          		
	          	</div>
	          </div>
          </div> <!-- .col-md-8 -->
        </div>
      </div>
    </section> <!-- .section -->

	
  
 @include('Home.config.footer')