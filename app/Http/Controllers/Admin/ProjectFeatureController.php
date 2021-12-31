<?php

namespace App\Http\Controllers\Admin;

use Inertia\Inertia;

use App\Http\Controllers\Controller;

use App\Models\ProjectFeature;
use App\Models\Project;

use Illuminate\Http\Request;

class ProjectFeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $project = Project::findOrFail($id);
        return Inertia::render('Admin/Projects/Features/Index', 
        [
            'project' => $project,
            'features' => $project->features
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProjectFeatureRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'projectId' => 'required',
            'featureName' => 'required|string',
            'featureDescription' => 'required|string',
            'dueDate' => 'required|string'

        ]);

        ProjectFeature::create([
            'project_id' => $request->projectId,
            'project_feature' => $request->featureName,
            'feature_description' => $request->featureDescription,
            'due_date' => $request->dueDate
        ]);

        return redirect("/admin/projects/$request->projectId/features");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProjectFeature  $projectFeature
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $project, $feature)
    {
        $project = Project::findOrFail($project);
        $feature = ProjectFeature::findOrFail($feature);

       
        return Inertia::render('Admin/Projects/Features/Show', [
             'project' =>  $project,
             'feature' => $feature
         ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProjectFeature  $projectFeature
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     
     * @param  \App\Models\ProjectFeature  $projectFeature
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        ProjectFeature::findOrFail($request->featureId)->update([
            'completed' => $request->completed
        ]);
        
        return redirect("/admin/projects/$request->projectId/features");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProjectFeature  $projectFeature
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

   
}
