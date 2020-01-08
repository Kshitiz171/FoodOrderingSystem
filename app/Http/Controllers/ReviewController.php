<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project\Review;
use File;
use Session;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Admin/review_form');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $review=new Review();
        $data=$review->get();
        if(Session::has('admin'))
        {
        return view('Admin.review')
        ->with('review_list',$data);
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
        $review=new Review();
        $data=$request->all();
        $rules=$review->getRules();

        $request->validate($rules);
         
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

        $review=new Review();

        //$blog->create($data);  //creates insert query..returns object
        $review->fill($data);
        
        $status=$review->save(); //INSERT or UPDATE boolean
        // dd($status); 
        //dd($data);
        if($status){
            $request->session()->flash('success','Review Added Successfully');
        }
        return redirect()->route('review.create');
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
        return view('Admin/review');
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
        $review=new Review();
        $review=$review->find($id);
        if(!$review){
            return redirect()->route('review.create');
        }
        return view('Admin/review_form')->with('category_data', $review);
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
        $review=new Review();
        $review=$review->find($id);

        //$blog->create($data);  //creates insert query..returns object
        $review->fill($data);
        
        $status=$review->save(); //INSERT or UPDATE boolean
         //dd($status); 
        //dd($data);
        return redirect()->route('review.create');
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
        $review=new Review();
        //$blog=$blog->where('id',$id)->first();
        $review=$review->find($id);
        if($review){
            $review->delete();
        }
        return redirect()->route('review.create');
    }
    
}
