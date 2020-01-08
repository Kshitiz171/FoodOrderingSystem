<?php

namespace App\Http\Controllers;
use App\Project\Product;
use App\Project\Category; 
use App\Project\Slider; 
use App\Project\Cart;
use App\Project\Video;
use App\Project\Review;
use File;
use Session;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
public function getAddToCart(Request $request,$id){
        $product=Product::find($id);
        $oldCart=Session::has('cart') ? Session::get('cart') : null;
        $cart=new Cart($oldCart);
        $cart->add($product,$product->id);

        $request->session()->put('cart',$cart);
       //dd($request->session()->get('cart'));
        return redirect()->route('front.index');
    }

    public function getReduceByOne($id){
        $oldCart=Session::has('cart') ? Session::get('cart') : null;
        $cart=new Cart($oldCart);
        $cart->reduceByOne($id);
        Session::put('cart',$cart);
        return redirect()->route('front.shoppingCart');

    }

    public function getAddByOne($id){
        $oldCart=Session::has('cart') ? Session::get('cart') : null;
        $cart=new Cart($oldCart);
        $cart->addByOne($id);
        Session::put('cart',$cart);
        return redirect()->route('front.shoppingCart');
    }

    public function getCard(){
        if(!Session::has('cart')){
            return view('Home.shopping-cart');
        }
        //$product=new Product();
        $oldCart=Session::get('cart');
        $cart=new Cart($oldCart);
        return view('home.shopping-cart',['products'=>$cart->items,'totalPrice'=>$cart->totalPrice]);
    }

        public function getCheckout(){
        if(!Session::has('cart')){
            return view('Home.checkout');
        }
        //$product=new Product();
        $oldCart=Session::get('cart');
        $cart=new Cart($oldCart);
        return view('home.checkout',['products'=>$cart->items,'totalPrice'=>$cart->totalPrice]);
    }


  

   // public function getProductsingle(Request $id){
     //   $product=new Product();
       // $product=$product->find($id);
        //return view('Home.product-single')->with('product_list', $product);
    //}

    
    public function index()
    {
        //
        $product=new Product();
        $slider=new Slider();
        $video=new Video();
        $review=new Review();
        $data=$product->orderBy('id','desc')->limit(8)->paginate(8);
        $dataa=$slider->orderBy('id','desc')->limit(1)->get();
        $dataaa=$video->orderBy('id','desc')->limit(4)->get();
        $dataaaa=$review->orderBy('id','desc')->limit(3)->get();

        return view('Home.index')
        ->with('product_list',$data)
        ->with('slider_list',$dataa)
        ->with('video_list',$dataaa)
        ->with('review_list',$dataaaa);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $product=new Product();
        $data=$product->orderBy('id','desc')->paginate(12);
        return view ('Home.shop')
         ->with('product_list',$data);
    }

    public function veg()
    {
        //
          $product=new Product();
        $data=$product->orderBy('id','desc')->where('type','veg')->paginate(8);
        return view ('Home.shop')
         ->with('product_list',$data);
    }

    public function nonveg()
    {
        //
          $product=new Product();
        $data=$product->orderBy('id','desc')->where('type','nonveg')->paginate(8);
        return view ('Home.shop')
         ->with('product_list',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       $cart=new Cart();
        $data=$request->all();
      //   $rules=$category->getRules();

       // $request->validate($rules);
        $cart->fill($data);
        
        $status=$cart->save(); //INSERT or UPDATE boolean
      //  if($status){
        //    $request->session()->flash('success','Category Added Successfully');
        //}
        dd($status);
        return redirect()->route('front.shoppingCart');
        //return redirect::to('category.create')->withSuccess('Success Message');
    //}
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
         $product=new Product();
        $product=$product->find($id);
        if(!$product){
            return redirect()->route('front.index');
        }

       // $qty=0;
        //if(session(_cart)){
            //foreach(session('_cart') as $items){
                //if($items['id']==$this->product->id){
                //    $qty=$items['quantity'];
              //      break;
            //    }
          //  }
        //}
        //dd($product);
        return view('Home/product-single')
       // ->with('total_prod',$qty)
        ->with('product_data', $product);
    }

    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {  
}



public function cart(){
    return view('Home/cart');
}

}