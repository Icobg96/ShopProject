<?php

namespace App\Models;


use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Role;
use App\Models\Ads;
class User extends Authenticatable
{

    protected $table = 'users';

    protected $fillable = ['name','email', 'isAdmin','phone','addres','password'];


    public function role(){
    	return $this->hasOne(Role::class,'id','role_id');

    }
    public function ads(){
    	return $this->hasMany(Ads::class,'user_id','id');
    }
}
