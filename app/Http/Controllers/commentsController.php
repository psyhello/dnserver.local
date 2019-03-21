<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use App\Comment;
Use App\Issue;

class commentsController extends Controller
{
	

    public function store(Issue $issue)
    {
    	Comment::create([
    		
    		'issue_id'=> $issue->id,

    		'body'=> request('body')

    	]);
        

        return back();
    }
    public function delete(Comment $comment)
    {
    	Comment::find($comment->id)->delete();

    	return back();

    }
}
