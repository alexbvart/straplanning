<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     /* Modifique este metodo para que cuando vaya a home me muestra la vista projects */
    public function index()
    {
        /* return view('home'); */
        $projects = Project::latest()->paginate();
    
        return view('projects.index', compact('projects')); 
    }
}
