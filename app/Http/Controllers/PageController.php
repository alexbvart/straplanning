<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;


class PageController extends Controller
{


    /* Retornas todos los proyectos */
    public function projects()
    {
       return view('projects',[
        'projects'=> Project::with('user')->latest()->paginate()
       ]);  /* un proyecto pertenece a un usuario */
    }


 

    /* Retornar un unico proyecto pasando su id */
    public function project(Project $project)
    {
        return view('project',['project'=> $project]);
    }
}