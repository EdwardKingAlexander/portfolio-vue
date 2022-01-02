<?php

namespace App\Http\Controllers;

use App\Models\Bug;
use App\Models\Project;
use App\Models\ProjectFeature;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BugContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Project $project)
    {
        $bugs = $project->bugs;
        return Inertia::render('Admin/Projects/Bugs/Index', [
            'bugs' => $project->bugs,
            'project' => $project
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Project $project)
    {
        return Inertia::render('Admin/Projects/Bugs/Create', ['project' => $project]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'bugDescription' => 'required|string|min:10',
            'solution' => 'string|min:10'
        ]);

        Bug::create([
            'bug_description' => $request->bugDescription,
            'solution' => $request->solution,
            'project_id' => $request->projectId
        ]);

        return redirect("/admin/projects/$request->projectId/bugs");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project, Bug $bug)
    {
        return Inertia::render('Admin/Projects/Bugs/Show', [
            'bug' => $bug,
            'project' => $project
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project, Bug $bug)
    {
        return Inertia::render('Admin/Projects/Bugs/Edit', [
            'bug' => $bug,
            'project' => $project
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $bug = Bug::findOrFail($request->bugId);
        $bug->update([
            'solution' =>  $request->solution,
            'resolved' => $request->resolved
        ]);

        return redirect("/admin/projects/$request->projectId/bugs");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project, Bug $bug)
    {
        Bug::destroy($bug->id);
        return redirect("/admin/projects/$project->id/bugs");
    }
}
