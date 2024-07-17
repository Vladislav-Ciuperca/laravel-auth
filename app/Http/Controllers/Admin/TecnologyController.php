<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\tecnology;
use Illuminate\Http\Request;

class TecnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tecnologies = tecnology::all();
        
        // $type = type::all()->keyBy('id');
        
        $data = [
            "tecnologies" => $tecnologies,
           
        ];
        
        return view('admin.tecnologies.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tecnologies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newtecnology = new tecnology();
        $newtecnology->name = $data['name'];
        $newtecnology->description = $data['description'];
        $newtecnology->icon = $data['icon'];
        $newtecnology->save();

        return redirect()->route('admin.tecnologies.show', $newtecnology->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(tecnology $tecnology)
    {
        $data = [
            "tecnologies" => $tecnology,
        ];

        return view("admin.tecnologies.show", $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tecnology $tecnology)
    {
        $data = [
            "tecnologies" => $tecnology,
        ];

        return view("admin.tecnologies.edit", $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tecnology $tecnology)
    {
        $data = $request->all();

       $tecnology->name = $data['name'];
       $tecnology->description = $data['description'];
       $tecnology->icon = $data['icon'];
       $tecnology->save();

        return redirect()->route('admin.tecnologies.index', $tecnology->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tecnology $tecnology)
    {
        $tecnology->delete();

         return redirect()->route('admin.tecnologies.index');
    }
}
