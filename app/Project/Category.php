<?php

namespace App\Project;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable=['category'];

    public function getRules(){
    	$rules=array(
            'category'=>'required'
        );
        return $rules;
    }

    public function getParentCategories(){
    	return $this->where('cat_id',1)->orderBy('category','ASC')->get();
    }
}
