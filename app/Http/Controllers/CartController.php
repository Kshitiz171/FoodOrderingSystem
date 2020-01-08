<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
     public function getCart()
    {
        return view('Home.cart');
    }
    //
    //protected $product=null;
    //public function __construct(Product $product){
    //	$this->product=$product;
    //}
   // public function addToCart(Request $request){
    //	dd($request->all());
    //	$this->product=$this->product->find($request->prod_id);
    //	if(!$this->product){
    //		return response()->json(['status'=>false,'msg'=>'Product not found','data'=>null]);
    //	}

    //	$images=explode(',',$this->product->image);

    //	$current_item=array(
    //		'id'=>$this->product->id,
    //		'title'=>$this->product->title,
    //		'link'=>route('product-show',$this->product->slug),
    //		'summary'=>$this->product->summary,
    //		'images'=>asset('uploads/'.$images[0]),
    //		'org_price'=>$this->product->price
    //	);

    //	$cart=session('_cart')?session('_cart'):null;
    //	if($cart){
    //		$index=null;
    //		foreach($cart as $key => $value){
    //			if($value['id']==$this->product->id){
    //				$index=$key;
    //				break;
    //			}
    //		}
    //		if($index===null){
    //			$current_item['quantity']=$request->qty;
    //		    $current_item['amount']=$request->product->act_price*$request->qty;
    //		    $cart[]=$current_item;
    //		}else{
    //			$cart[$index]['quantity']=$request->qty;
    //			$cart[$index]['amount']=$this->product->act_price*$request->qty;

    //			if($request->qty<=0 || $cart[$index]['quantity']<=0){
    //				unset($cart[$index]);
    //			}
    //		}

    //	}else{
    //		$current_item['quantity']=$request->qty;
    //		$current_item['amount']=$request->product->act_price*$request->qty;
    //		$cart[]=$current_item;
    //	}

    //	session()->put('_cart',$cart);
    //	return response()->json(['status'=>true,'msg'=>'Product Added to cart','data'=>null]);
    //}
}
