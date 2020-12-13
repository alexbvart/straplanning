<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
});
 */
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Use App\Project;
Route::get('projects', function () {
    $projects = Project::get();

    foreach ($projects as $project ) {
        echo"
            $project->id
            $project->name by
            <strong>{$project->user->name} </strong><br>
            ";
    }
});



Use App\User;
Route::get('users', function () {
    $users = User::get();

    foreach ($users as $user ) {
        echo"
            $user->id
            <strong>$user->name </strong> tiene
            {$user->project->count()} projects
            <br>
            ";
    }
});



Use App\Geninformation;
Route::get('info', function () {
    $infos = Geninformation::get();

    foreach ($infos as $info ) {
        echo"
            $info->id
            <strong>{$info->project->name} </strong> ----
            $info->mission
            <br>
            ";
    }
});

Route::get('/', 'PageController@projects');
Route::get('/{project:slug}', 'PageController@project')->name('project');
