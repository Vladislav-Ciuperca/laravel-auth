<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;

use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Storage;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        

        $progetti = Project::orderByDesc('id')->paginate();

        $data = [
            "progetti" => $progetti,
            // "types" => $type,
        ];

        // dd($tecnology);
        
        return view('admin.projects.index', $data);
        // dd( $prova,$progetti);
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
           
        }

        $data = $request->all();

        $newProject = new Project();
        $newProject->titolo = $data['titolo'];
        $newProject->descrizione = $data['descrizione'];
        $newProject->immagine = $image_path;
        $newProject->save();

        return redirect()->route('admin.projects.show', $newProject->id);
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

        if ($request->has('immagine')) {
           
            $image_path = Storage::put('uploads', $request->immagine);
           
        }

        $data = $request->all();


        $project->titolo = $data['titolo'];
        $project->descrizione = $data['descrizione'];
        $project->immagine = $image_path;
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
