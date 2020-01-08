<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project\Category;
use File;
use Session;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Admin/category_form');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $category=new Category();
        $data=$category->get();
        if(Session::has('admin'))
        {
        return view('Admin.category')
        ->with('category_list',$data);
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
        $category=new Category();
        $data=$request->all();
         $rules=$category->getRules();

        $request->validate($rules);
        
        

        //$blog->create($data);  //creates insert query..returns object
        $category->fill($data);
        
        $status=$category->save(); //INSERT or UPDATE boolean
         //dd($status); 
        //dd($data);
        if($status){
            $request->session()->flash('success','Category Added Successfully');
        }
        return redirect()->route('category.create');
        //return redirect::to('category.create')->withSuccess('Success Message');
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
        return view('Admin/category');
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
          $category=new Category();
        $category=$category->find($id);
        if(!$category){
            return redirect()->route('category.create');
        }
        return view('Admin/category_form')->with('category_data', $category);
    
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
        $category=new Category();
        $category=$category->find($id);

        //$blog->create($data);  //creates insert query..returns object
        $category->fill($data);
        
        $status=$category->save(); //INSERT or UPDATE boolean
         //dd($status); 
        //dd($data);
        return redirect()->route('category.create');
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
               $category=new Category();
        //$blog=$blog->where('id',$id)->first();
        $category=$category->find($id);
        if($category){
            $category->delete();
        }
        return redirect()->route('category.create');
    }
    
}
