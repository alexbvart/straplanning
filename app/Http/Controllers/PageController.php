<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Itemfoda;


class PageController extends Controller
{


    /* Retornas todos los proyectos */
    public function projects()
    {
       return view('projects',[
        'projects'=> Project::with('user')
/*         ->latest() */
        ->paginate()
       ]);  /* un proyecto pertenece a un usuario */
    }


 

    /* Retornar un unico proyecto pasando su id */
    public function project(Project $project)
    {

            $projectID = $project->id;

 /*        $items = $project->itemfodas;  */
        $items = Itemfoda::where('project_id','=',$projectID)->get(); 

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

        /* return $fortalezas ;  */

        /* return view('project',['project'=> $project]);  */
        return view('project', compact('project','fortalezas','oportunidades','debilidades','amenazas'));
    }



    /* Mostrar vista en pdf del actual proyecto*/
    public function projectpdf(Project $project)
    {

        
        $projectID = $project->id;


        $items = Itemfoda::where('project_id','=',$projectID)->get(); 

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


        /*         return view('tabla',['project'=> $project]); */ 
        $pdf = \PDF::loadView('tabla',compact('project','fortalezas','oportunidades','debilidades','amenazas'));
        $pdf->setPaper('a4','landscape');
        return $pdf->stream();
    }
}