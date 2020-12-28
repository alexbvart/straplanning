<?php

namespace App\Http\Controllers;

use App\Itemfoda;
use App\Project;

use App\Http\Requests\ItemfodaRequest;

class ItemfodaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Project $project)
    {   
/*        return dd($project);
         $user_id = auth()->user()->id;
        return view('itemfoda.create',['projects'=>Project::where('user_id','=',$user_id)->get()]); */
        /*         return view('itemfoda.create',['project']); */

        $projectID = $project->id;
        $itemfoda = Itemfoda::where('project_id','=',$projectID)->get();

        $fortalezas = Itemfoda::where('project_id','=',$projectID)
            ->where('tipoitem_id','=',1)
            ->get(); 

        $oportunidades = Itemfoda::where('project_id','=',$projectID)
            ->where('tipoitem_id','=',2)
            ->get(); 

        $debilidades = Itemfoda::where('project_id','=',$projectID)
            ->where('tipoitem_id','=',3)
            ->get(); 

        $amenazas = Itemfoda::where('project_id','=',$projectID)
            ->where('tipoitem_id','=',4)
            ->get(); 

        return view('itemfoda.create', compact('project','fortalezas','oportunidades','debilidades','amenazas','itemfoda'));



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ItemfodaRequest $request)
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
    {   /* return dd($itemfoda);  */
        return view('Itemfoda.edit', compact('itemfoda'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Itemfoda  $itemfoda
     * @return \Illuminate\Http\Response
     */
    public function update(ItemfodaRequest $request, Itemfoda $itemfoda)
    {

        $itemfoda->update($request->all());

         $project = Project::find($itemfoda->project_id); 


        $projectID = $itemfoda->project_id;
        $itemfoda = Itemfoda::where('project_id','=',$projectID)->get();

        $fortalezas = Itemfoda::where('project_id','=',$projectID)
            ->where('tipoitem_id','=',1)
            ->get(); 

        $oportunidades = Itemfoda::where('project_id','=',$projectID)
            ->where('tipoitem_id','=',2)
            ->get(); 

        $debilidades = Itemfoda::where('project_id','=',$projectID)
            ->where('tipoitem_id','=',3)
            ->get(); 

        $amenazas = Itemfoda::where('project_id','=',$projectID)
            ->where('tipoitem_id','=',4)
            ->get(); 

        return view('itemfoda.create', compact('project','fortalezas','oportunidades','debilidades','amenazas','itemfoda'));


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Itemfoda  $itemfoda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Itemfoda $itemfoda)
    {
        $itemfoda->delete();
        return back()->with('status','Iten foda eliminado con exito con exito');


    }
}
