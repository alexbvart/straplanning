<?php

namespace App\Http\Controllers;

use App\Itemfoda;
use App\Project;

use Illuminate\Http\Request;

class ItemfodaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_id = auth()->user()->id;
        return view('itemfoda.create',['projects'=>Project::where('user_id','=',$user_id)->get()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Itemfoda::create($request->all());

        return back()->with('status','Los items han sido guardados.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Itemfoda  $itemfoda
     * @return \Illuminate\Http\Response
     */
    public function show(Itemfoda $itemfoda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Itemfoda  $itemfoda
     * @return \Illuminate\Http\Response
     */
    public function edit(Itemfoda $itemfoda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Itemfoda  $itemfoda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Itemfoda $itemfoda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Itemfoda  $itemfoda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Itemfoda $itemfoda)
    {
        //
    }
}
