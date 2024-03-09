<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Project;

class ProjectsController extends Controller
{
    public function getAllProjects(Request $request) {
        try {
            $projects = Project::all();
    
            if (!$projects) {
                return response()->json(['success' => false, 'res_api_code' => 'PROJECT501', 'message' => 'No projects found.'], 200);
            }else{
                return response()->json(['success' => true, 'res_api_code' => 'PROJECT502', 'message' => 'Projects successfully fetched.', 'projects' => $projects], 200);
            }
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return response()->json(['success' => false, 'res_api_code' => 'PROJECT107', 'message' => 'Server error'], 500);
        }
    }
}
