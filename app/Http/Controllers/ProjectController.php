<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Project;

class ProjectController extends Controller
{
	public function showProjectForm(){
		return view('admin.project_form');
	}
    public function completed_projects(){
    	return view('training.completed_projects',['completed_projects'=>Project::Completed()->get()]);
    }

    public function ongoing_projects(){
    	return view('training.ongoing_projects',['ongoing_projects'=>Project::Ongoing()->get()]);
    }

    public function create_project(Request $request){
        app('App\Http\Controllers\FormValidator')->myValidator($request);
    	Project::create([
    		'name'=>$request->name,
    		'content'=>$request->content,
    		'status'=>strtolower($request->status),
    		'project_alias'=>Str::slug($request->name,'-'),
    		'photo'=>$request->photo,
    		'date'=>$request->date
    	]);
    	return redirect()->back()->with(['message' => 'A Project was Created Successfully', 'alert' => 'alert-success']);
    }

    public function view_completed_projects(Project $project_alias){
    	return view('training.view_completed_projects',['project_alias'=>$project_alias]);
    }

    public function view_ongoing_projects(Project $project_alias){
    	return view('training.view_completed_projects',['project_alias'=>$project_alias]);
    }

    public function edit_project(Project $project_alias){
        return view('admin.edit_project',['project_alias'=>$project_alias]);
    }

    public function update_project(Request $request, Project $project_alias){
        app('App\Http\Controllers\FormValidator')->myValidator($request);
        $project_alias->update([
            'name'=>$request->name,
            'content'=>$request->content,
            'status'=>strtolower($request->status),
            'date'=>$request->date,
            'package_alias'=>Str::slug($request->name,'-'),
            'photo'=>$request->photo,
        ]);
        return redirect()->back()->with(['message' => 'A Project was Edited Successfully', 'alert' => 'alert-success']);
    }

    public function delete_project(Project $project_alias){
        $project_alias->delete();
        return redirect()->back()->with(['message' => 'A Project was Deleted Successfully', 'alert' => 'alert-success']);


    }
}
