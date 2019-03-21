<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    protected $fillable = ['title','description'];

    public function Comments()
    {
    	return $this->hasMany(Comment::class);
    }

}
