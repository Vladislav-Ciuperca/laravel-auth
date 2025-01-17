<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
// use App\Models\Project;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {

        return response()->json([
            'success' => true,
            'projects' => Project::with(['technology', 'type'])->orderByDesc('id')->paginate()
        ]);
    }

    public function latest()
    {
        return response()->json([
            'success' => true,
            'projects' => Project::with(['technology', 'type'])->orderByDesc('id')->take(3)->get()
        ]);
    }

    public function show($id)
    {

        $project = Project::with('technology')->where('id', $id)->first();


        if ($project) {

            return response()->json([
                'success' => true,
                'project' => $project,
            ]);
        } else  {
            return response()->json([
                'success' => false,
                'message' => 'not found'
            ]);
        }
        //    return response()->json([
        //     'success'=> true,
        //     'project'=> $project,
        // ]);

        //    dd( $project);

    }
}
