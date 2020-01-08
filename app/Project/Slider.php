<?php

namespace App\Project;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    //
    protected $fillable=['image'];

    public function getRules(){
    	$rules=array(
            'image'=>'required|image|max:2018'
        );
        return $rules;
    }
}
