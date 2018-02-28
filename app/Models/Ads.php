<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\SubCategory;
class Ads extends Model
{
    protected $table='ads';
    protected $fillable=['title','price','description','imagePath'];

    public function user(){

    	return $this->hasOne(User::class,'id','user_id');
    }

    public function subCategory(){

    	return $this->hasOne(SubCategory::class,'id','sub_category_id');
    }
}
