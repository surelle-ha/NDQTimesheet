<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\UserRole;

class UserRolesController extends Controller
{
    public function getAllUserRoles(Request $request) {
        try {
            $user_roles = UserRole::all();
    
            if (!$user_roles) {
                return response()->json(['success' => false, 'res_api_code' => 'ROLE501', 'message' => 'No user roles found.'], 200);
            }else{
                return response()->json(['success' => true, 'res_api_code' => 'ROLE502', 'message' => 'User roles successfully fetched.', 'roles' => $user_roles], 200);
            }
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return response()->json(['success' => false, 'res_api_code' => 'ROLE107', 'message' => 'Server error'], 500);
        }
    }
}
