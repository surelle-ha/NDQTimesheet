<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\UserAppRole;

class UserAppRolesController extends Controller
{
    public function getAllUserAppRoles(Request $request) {
        try {
            $user_app_roles = UserAppRole::all();
    
            if (!$user_app_roles) {
                return response()->json(['success' => false, 'res_api_code' => 'APPROLE501', 'message' => 'No application roles found.'], 200);
            }else{
                return response()->json(['success' => true, 'res_api_code' => 'APPROLE502', 'message' => 'Application Roles successfully fetched.', 'app_roles' => $user_app_roles], 200);
            }
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return response()->json(['success' => false, 'res_api_code' => 'APPROLE107', 'message' => 'Server error'], 500);
        }
    }
}
