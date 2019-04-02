<?php

namespace App\Http\Controllers;

use App\Issue;
use Illuminate\Http\Request;
use App\User;

class IssuesController extends Controller
{

    /** 
    * Checking authentication.
    *
    * 
    */
    public function __construct()
    {
        $this -> middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $issues = Issue::All();

        return view ('issues.index', compact('issues'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view ('issues.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $attr = request()->validate(['title'=> 'required','description'=>'required']);

        Issue::create($attr + ['user_id'=>auth()->id()]);
        

        return redirect('/issues');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Issue  $issue
     * @return \Illuminate\Http\Response
     */
    public function show(Issue $issue)
    {
        
        return view ('issues.show', compact('issue','user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Issue  $issue
     * @return \Illuminate\Http\Response
     */
    public function edit(Issue $issue)
    {
        return view('issues.edit',compact('issue'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Issue  $issue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Issue $issue)
    {

        $issue = Issue::find($issue->id);

        $issue->title = request('title');
        $issue->description = request('description');

        $issue->save();

        return redirect('/issues');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Issue  $issue
     * @return \Illuminate\Http\Response
     */
    public function destroy(Issue $issue)
    {
        Issue::find($issue->id)->delete();

        return redirect('/issues');
    }
}
