<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project\Product;
use App\Project\Category;
use File;
use Session;
//use Image;
class ProductController extends Controller
{
    /**

     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $category=null;
    protected $product=null;
    
    public function __construct(Category $category,Product $product){
        $this->category=$category;
        $this->product=$product;
        //$this->user=$user;
        //$this->product=$product;
    }
    public function index()
    {
        //
//$parent_cats=new Category;
        $category=new Category();
        $all_cats=$category->get();
        return view('Admin/product_form')->with('cat_data',$all_cats);
        


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // $product=new Product();
       // $data=$product->getAllProducts();
        //return view('Admin.product')
        //->with('product_list',$data);

                $this->product=$this->product->getAllProducts();
                if(Session::has('admin'))
        {
        return view('Admin.product')->with('product_list',$this->product);
    }else{
        return redirect('log');
    }
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
       $product=new Product();
        $rules=$product->getRules();

        $request->validate($rules);


         $data=$request->all();
         
         if($request->has('image')){
            $file_name="Image-".date('ymdhis').rand(0,999).".".$request->image->getClientOriginalExtension();
            $path=public_path().'/uploads';
            if(!File::exists($path)){
                File::makeDirectory($path,0777,true,true);
            }
            $success=$request->image->move($path,$file_name);
            if($success){
                $data['image']=$file_name;
            }else{
                $data['image']=null;
            }
            //dd($file_name);
         }

        $product=new Product();

        //$blog->create($data);  //creates insert query..returns object
        $product->fill($data);
        
        $status=$product->save(); //INSERT or UPDATE boolean
         //dd($status); 
        //dd($data);
       if($status){
            $request->session()->flash('success','Product Added Successfully');
        }
        return redirect()->route('product.create');
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
        return view('Admin/product');
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
        $category=new Category();
        $all_cats=$category->get();
        return view('Admin/product_form')->with('cat_data',$all_cats)->with('product_data', $product);

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
        $data=$request->all();
        $product=new Product();
        $product=$product->find($id);

        //$blog->create($data);  //creates insert query..returns object
        $product->fill($data);
        
        $status=$product->save(); //INSERT or UPDATE boolean
         //dd($status); 
        //dd($data);
        return redirect()->route('product.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $product=new Product();
        //$blog=$blog->where('id',$id)->first();
        $product=$product->find($id);
        if($product){
            $product->delete();
        }
        return redirect()->route('product.create');
    }


 /*   public function addToCart(Request $request)
{
    $product = $this->productRepository->findProductById($request->input('productId'));
    $options = $request->except('_token', 'productId', 'price', 'qty');

    Cart::add(uniqid(), $product->name, $request->input('price'), $request->input('qty'), $options);

    return redirect()->back()->with('message', 'Item added to cart successfully.');
}*/
}
