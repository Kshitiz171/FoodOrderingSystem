<?php

namespace App\Http\Controllers;
use App\Project\Product;
use App\Project\Category; 
use App\Project\Slider; 
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //

    public function getHomepage(){
    	$product=new Product();
        $slider=new Slider();
        $data=$product->orderBy('id','desc')->limit(8)->get();
        $dataa=$slider->orderBy('id','desc')->limit(1)->get();

        return view('Home.index')
        ->with('slider_list',$dataa)
        ->with('product_list',$data);
    }

    public function getProductsingle(Request $id){
        $product=new Product();
        $product=$product->find($id);
        return view('Home.product-single')->with('product_data', $product);
    }


    public function getShop(){  
        $product=new Product();
        $data=$product->orderBy('id','desc')->get();
        return view ('Home.shop')
         ->with('product_list',$data);
    }

    
    //public function getHello(){
    //	return view('Home.hello');
    //}
 

}
