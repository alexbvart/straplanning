<?php

namespace App\Http\Controllers;

use App\Geninformation;
use App\Project;
use Illuminate\Http\Request;
use App\Http\Requests\StoreGeninformationRequest;

class GeninformationController extends Controller
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
        return view('geninformations.create',['projects'=>Project::where('user_id','=',$user_id)->get()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGeninformationRequest $request)
    {
        Geninformation::create($request->all());

        return back()->with('status','Los datos han sido guardados');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Geninformation  $geninformation
     * @return \Illuminate\Http\Response
    
    public function show(Geninformation $geninformation)
    {
        //
    }
    */
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Geninformation  $geninformation
     * @return \Illuminate\Http\Response
     */
    public function edit(Geninformation $geninformation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Geninformation  $geninformation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Geninformation $geninformation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Geninformation  $geninformation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Geninformation $geninformation)
    {
        //
    }
}
