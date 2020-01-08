<?php

namespace App\Project;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //
    protected $fillable=['image','name','description','position'];

    public function getRules(){
    	$rules=array(
            'image'=>'sometimes|image|max:2018',
            'name'=>'required|string',
            'position'=>'required',
            'description'=>'required'
        );
        return $rules;
    }
}
