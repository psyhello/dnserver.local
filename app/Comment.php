<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	protected $guarded =[];
	
    public function issue()
    {
    	return $this->belongsTo(Issue::class);
    }

     public function user()
    {
    	return $this->belongsTo(User::class)->withDefault(['name' => 'Рукасто-головастый тестер']);
    }
}
