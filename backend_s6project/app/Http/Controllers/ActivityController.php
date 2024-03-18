<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Http\Requests\StoreActivityRequest;
use App\Http\Requests\UpdateActivityRequest;
use Illuminate\Http\Request;
class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('activity', ['activity' => Activity::with('project')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        
        return view('activity_create', ['project_id' => $request->get('project_id')]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreActivityRequest $request)
    {
        $activityData = [
            'title' => $request->title,
            'description' => $request->description,
            'project_id' => $request->project_id,
             
        ];
        
        Activity::create($activityData);      
        
        return redirect('project/'.$request->project_id);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Activity $activity)
    {
        return view ('activity_details', ['activity' => $activity]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Activity $activity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateActivityRequest $request, Activity $activity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Activity $activity)
    {
        //
    }
}
