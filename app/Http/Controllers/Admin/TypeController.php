<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\type;
use App\Models\Project;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $type = type::all();

        $data = [
            "types" => $type
        ];

        return view('admin.types.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.types.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newType = new type();
        $newType->name = $data['name'];
        $newType->icon = $data['icon'];
        $newType->save();

        return redirect()->route('admin.types.show', $newType->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(type $type)
    {
        $data = [
            "types" => $type,
        ];

        return view('admin.types.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(type $type)
    {
        $data = [
            "types" => $type
        ];

        return view("admin.types.edit", $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, type $type)
    {
        $data = $request->all();


        $type->name = $data['name'];
        $type->icon = $data['icon'];
       
        $type->save();

        return redirect()->route('admin.types.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(type $type)
    {
        $type->delete();

        return redirect()->route('admin.types.index');
    }
}
