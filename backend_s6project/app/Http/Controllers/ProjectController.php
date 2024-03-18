<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // un accrocco poco convincente per filtrare i progetti dell'utente loggato
        $allProj=Project::with('activities')->with('user')->get();
        $userProj=[];
        foreach($allProj as $project) {
            if($project['user_id'] == Auth::user()->id) {
                array_push($userProj,$project);
            } 
        }
       $project= Project::with('activities')->where('user_id', '=', Auth::user()->id)->get();
      
      return view('project', ['project' => $project]);
     /*  return view('project', ['project' => $userProj]);
 */ 
/*     return view('project', ['project' => Project::with('activities')->where('user_id', '=', Auth::user()->id)]);
 */
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('project_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        $projectData = [
            'title' => $request->title,
            'description' => $request->description,
            'deadline' => $request->deadline,
            'user_id' => auth()->id(), 
        ];
        
        Project::create($projectData);      
        
        return redirect()->action([ProjectController::class, 'index']);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view ('project_details', ['project' => $project] );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view ('project_edit', ['project' => $project]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $queryBuilder = $project->delete();
        return $queryBuilder ? redirect()->action([ProjectController::class, 'index']) : 'errore';
    }
}
