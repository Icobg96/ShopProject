<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Ads;

class SubCategory extends Model
{
	protected $table='sub_categories';
	protected $fillable=['title'];
	
    public function category(){
    	return $this->hasOne(Category::class,'id','category_id');
    }

    public function ads(){
    	return $this->hesMeny(Ads::class,'sub_category_id','id');
    }
}
