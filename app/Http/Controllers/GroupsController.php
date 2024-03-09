<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Group;

class GroupsController extends Controller
{
    public function getAllGroups(Request $request) {
        try {
            $groups = Group::all();
    
            if (!$groups) {
                return response()->json(['success' => false, 'res_api_code' => 'GROUP501', 'message' => 'No group found.'], 200);
            }else{
                return response()->json(['success' => true, 'res_api_code' => 'GROUP502', 'message' => 'Groups successfully fetched.', 'groups' => $groups], 200);
            }
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return response()->json(['success' => false, 'res_api_code' => 'GROUP107', 'message' => 'Server error'], 500);
        }
    }
}
