<?php

namespace App\Project;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable=['image','name','category','price','cat_id','description','type'];

    public function getRules(){
    	$rules=array(
            'image'=>'sometimes|image|max:2018',
            'name'=>'required|string',
            'cat_id'=>'required|numeric',
            'price'=>'required',
            'description'=>'required'
        );
        return $rules;
    }

    public function cat_info(){
    	return $this->hasOne('App\Project\Category','id','cat_id');

    }
    public function getAllProducts(){
    	//return $this->orderBy('name')->get();
    	return $this->with(['cat_info'])->get();
    }
}
