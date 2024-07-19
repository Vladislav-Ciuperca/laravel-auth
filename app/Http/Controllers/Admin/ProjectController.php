<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
// use App\Models\Technology;
// use App\Models\type;
use Illuminate\Http\Request as HttpRequest;

use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $progetti = Project::all();

        $data = [
            "progetti" => $progetti,
        ];

        return view('admin.projects.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HttpRequest $request)
    {

        // dd ($request->all());

        if ($request->has('immagine')) {
           
            $image_path = Storage::put('uploads', $request->immagine);
            // dd($image_path);
        }

        $data = $request->all();
        $newProject = new Project();
        $newProject->descrizione = $data['descrizione'];
        $newProject->titolo = $data['titolo'];
        $newProject->immagine = $image_path;

        $newProject->save();


       return redirect()->route('admin.projects.show', $newProject->id);
        // return redirect()->route('admin.projects.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        $data = [
            "project" => $project
        ];

        return view("admin.projects.show", $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $data = [
            "progetto" => $project
        ];

        return view("admin.projects.edit", $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HttpRequest $request, Project $project)
    {
        $data = $request->all();


        $project->titolo = $data['titolo'];
        $project->descrizione = $data['descrizione'];
        $project->immagine = $data['immagine'];
        $project->save();

        return redirect()->route('admin.projects.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('admin.projects.index');
    }
}
