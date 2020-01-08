<?php

namespace App\Project;

use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    //
    protected $fillable=['link','title'];

    public function getRules(){
    	$rules=array(
    		'link'=>'required',
            'title'=>'required'
        );
        return $rules;
    }
}
