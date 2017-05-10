<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Parsedown;

class News extends Model
{
    protected $fillable = ['content', 'title'];
	
	public function setTitleAttribute($value) {
    $this->attributes['title'] = $value;
    $this->attributes['slug'] = str_slug($value);
}

public function setContentAttribute($value){
    $this->attributes['content'] = clean($value);
}

public function getMarkdownContentAttribute() {
    return (new Parsedown)->text($this->attributes['content']);
}
}
