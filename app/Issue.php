<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    protected $fillable = ['title','description','user_id'];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }


    public function Comments()
    {
    	return $this->hasMany(Comment::class)->withDefault(['name' => 'Рукасто-головастый тестер']);
    }

}
