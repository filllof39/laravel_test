<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
	protected $fillable = ['slug'];
    public $timestamps = false;
	
		public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }
}
