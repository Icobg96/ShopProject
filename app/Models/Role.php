<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Role extends Model
{
	protected $table = 'roles';
	protected $fillable=['name'];
	
    public function user(){
    	return $this->hasMeny(User::class,'role_id','id');

    }
}
