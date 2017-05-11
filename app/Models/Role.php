<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
	protected $fillable = ['slug'];
    public $timestamps = false;
	
    /**
    * Свзяь «многие ко многим»
    * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
    */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
