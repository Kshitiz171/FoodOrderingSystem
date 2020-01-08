<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project\Video;
use File;
use Session;
class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Admin/video_form');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         $video=new Video();
        $data=$video->get();
        if(Session::has('admin'))
        {
        return view('Admin.video')
        ->with('video_list',$data);
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
        $video=new Video();
                 $data=$request->all();
                 $rules=$video->getRules();

        $request->validate($rules);
        
        $video->fill($data);
        $status=$video->save(); //INSERT or UPDATE boolean
         //dd($status); 
        //dd($data);
        if($status){
            $request->session()->flash('success','Video Added Successfully');
        }
        return redirect()->route('video.create');
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
       return view('Admin/video');
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
        $video=new Video();
        $video=$video->find($id);
        if(!$video){
            return redirect()->route('video.create');
        }
        return view('Admin/video_form')->with('category_data', $video);
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
        $video=new Video();
        $video=$video->find($id);

        //$blog->create($data);  //creates insert query..returns object
        $video->fill($data);
        
        $status=$video->save(); //INSERT or UPDATE boolean
         //dd($status); 
        //dd($data);
        return redirect()->route('video.create');
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
        $video=new Video();
        //$blog=$blog->where('id',$id)->first();
        $video=$video->find($id);
        if($video){
            $video->delete();
        }
        return redirect()->route('video.create');
    }
    
}
