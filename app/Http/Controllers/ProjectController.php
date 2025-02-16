<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user_id = auth()->user()->id;
     
        $projects = Project::where('user_id','=',$user_id) 
            ->latest()
            ->paginate();
        return view('projects.index', compact('projects')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* return $request->all(); */

        //salvar la información
        $project = Project::create(
            [
                'user_id' => auth()->user()->id
            ] + $request->all()
        );
        
        /* return $project->all();  */

        return back()->with('status','¡Felicitaciones! tu proyecto fue creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     
    public function show(Project $project)
    {
        //
    }*/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $project->update($request->all());
        return back()->with('status','¡Felicitaciones! los datos fueron actualizados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
      $project->delete();
      return back()->with('status', '¡Uff! Ese proyecto ahora es historia.');
    }
}
