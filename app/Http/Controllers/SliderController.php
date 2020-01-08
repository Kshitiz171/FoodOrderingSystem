<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project\Slider;
use File;
use Session;
class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function login(){
        

    }
    public function index()
    {
        //
        return view('Admin/slider_form');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //return view('Admin/slider');
         $slider=new Slider();
        $data=$slider->get();
        if(Session::has('admin'))
        {
        return view('Admin.slider')
    
        ->with('slider_list',$data);
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
        $slider=new Slider();
        $data=$request->all();
        $rules=$slider->getRules();

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

        $slider=new Slider();

        //$blog->create($data);  //creates insert query..returns object
        $slider->fill($data);
        
        $status=$slider->save(); //INSERT or UPDATE boolean
         //dd($status); 
        //dd($data);
        if($status){
            $request->session()->flash('success','Slider Added Successfully');
        }
        return redirect()->route('slider.create');
    //dd("done");
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
        return view('Admin/slider');
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
         $slider=new Slider();
        $slider=$slider->find($id);
        if(!$slider){
            return redirect()->route('slider.create');
        }
        return view('Admin/slider_form')->with('slider_data', $slider);
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
        $slider=new Slider();
        $slider=$slider->find($id);

        //$blog->create($data);  //creates insert query..returns object
        $slider->fill($data);
        
        $status=$slider->save(); //INSERT or UPDATE boolean
         //dd($status); 
        //dd($data);
        return redirect()->route('slider.create');
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
           $slider=new Slider();
        //$blog=$blog->where('id',$id)->first();
        $slider=$slider->find($id);
        if($slider){
            $slider->delete();
        }
        return redirect()->route('slider.create');
    }
    
}
