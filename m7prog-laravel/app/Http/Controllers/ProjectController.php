<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view(
            'projects.index',
            [
                'projects' => $projects
            ]
        );
    }


    /**
     * Show a single item
     * 
     * @param project $project
     * @return string
     */
    public function show(Project $project)
    {
        return view('projects.show', ['project'=>$project]);
    }

    public function add()
    {

        // Maak een model aan
        $model = new Project();
        // definieer de velden
        $model->title = 'mijn title';
        // sla het model op
        $model->save();
    }
}
