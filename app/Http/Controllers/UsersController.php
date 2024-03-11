<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\User;
use Laravel\Sanctum\HasApiTokens;

class UsersController extends Controller
{
    use HasApiTokens;

    public function getAllUsers(Request $request) {
        try {
            $users = User::all();
    
            if (!$users) {
                return response()->json(['success' => false, 'res_api_code' => 'USER501', 'message' => 'No user found.'], 200);
            }else{
                return response()->json(['success' => true, 'res_api_code' => 'USER502', 'message' => 'Users successfully fetched.', 'users' => $users], 200);
            }
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return response()->json(['success' => false, 'res_api_code' => 'USER107', 'message' => 'Server error'], 500);
        }
    }

    public function removeUser(Request $request) {
        try {
            // Validate the request to ensure an ID is provided
            $validatedData = $request->validate([
                'id' => 'required|integer',
            ]);
    
            // Find the user by ID
            $user = User::find($validatedData['id']);
    
            if (!$user) {
                return response()->json(['success' => false, 'res_api_code' => 'USER503', 'message' => 'User not found.'], 404);
            } else {
                // Delete the user
                $user->delete();
                return response()->json(['success' => true, 'res_api_code' => 'USER504', 'message' => 'User successfully removed.'], 200);
            }
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json(['success' => false, 'res_api_code' => 'USER108', 'message' => $e->errors()], 422);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return response()->json(['success' => false, 'res_api_code' => 'USER107', 'message' => 'Server error'], 500);
        }
    }
    

    public function login(Request $request) {
        try {
            $validatedData = $request->validate([
                'email' => 'required|email',
                'password' => 'required|string',
            ]);
    
            $user = User::where('email', $validatedData['email'])->first();
    
            if (!$user || !Hash::check($validatedData['password'], $user->password)) {
                return response()->json(['success' => false, 'res_api_code' => 'USER105', 'message' => 'Invalid credentials'], 200);
            }
    
            // Revoke all existing tokens
            $user->tokens->each(function($token, $key) {
                $token->delete();
            });
    
            // Create a new token
            $token = $user->createToken('auth_token')->plainTextToken;
            
            return response()->json([
                'success' => true, 
                'res_api_code' => 'USER208', 
                'message' => 'Successfully logged in', 
                'access_token' => $token, 
                'token_type' => 'Bearer', 
                'user' => $user
            ], 200);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json(['success' => false, 'res_api_code' => 'USER106', 'message' => $e->errors()], 422);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return response()->json(['success' => false, 'res_api_code' => 'USER107', 'message' => 'Server error'], 500);
        }
    }
       

    public function register(Request $request)
    {
        try {
            $user = User::where('email', $request->input("email"))->first();

            if ($user) {
                return response()->json(['success' => false, 'res_api_code' => 'USER102', 'message' => 'User already registered'], 200);
            } else {
                $validatedData = $request->validate([
                    'first_name' => 'required|string',
                    'last_name' => 'required|string',
                    'email' => 'required|email|unique:users',
                    'password' => 'required|string',
                ]);
                $user = User::create([
                    'first_name' => $validatedData['first_name'],
                    'last_name' => $validatedData['last_name'],
                    'email' => $validatedData['email'],
                    'password' => $validatedData['password'],
                ]);
                return response()->json(['success' => true, 'res_api_code' => 'USER101', 'message' => 'User successfully registered'], 201);
            }
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json(['success' => false, 'res_api_code' => 'USER103', 'message' => $e->errors()], 422);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return response()->json(['success' => false, 'res_api_code' => 'USER104', 'message' => $e->getMessage()], 500);
        }
    }

    public function validateToken(Request $request)
{
    try {
        // Extract the token from the request
        $token = $request->bearerToken();

        if (!$token) {
            return response()->json(['success' => false, 'res_api_code' => 'TOKEN100', 'message' => 'No token provided'], 400);
        }

        // Find the token in the database
        $tokenModel = \Laravel\Sanctum\PersonalAccessToken::findToken($token);

        if (!$tokenModel) {
            return response()->json(['success' => false, 'res_api_code' => 'TOKEN101', 'message' => 'Invalid token'], 200);
        }

        $user = $tokenModel->tokenable;

        if (!$user) {
            $tokenModel->delete();
            return response()->json(['success' => false, 'res_api_code' => 'TOKEN102', 'message' => 'No user associated with this token, token deleted'], 200);
        }

        // Delete all other tokens for this user
        \Laravel\Sanctum\PersonalAccessToken::where('tokenable_id', $user->id)
            ->where('id', '!=', $tokenModel->id)
            ->delete();

        // Token is valid and active
        return response()->json(['success' => true, 'res_api_code' => 'TOKEN200', 'message' => 'Token is valid', 'user' => $user], 200);
    } catch (\Exception $e) {
        Log::error($e->getMessage());
        return response()->json(['success' => false, 'res_api_code' => 'TOKEN103', 'message' => 'Server error'], 500);
    }
}


    
    public function logout(Request $request)
    {
        $user = $request->user();
        $user->tokens->each(function ($token, $key) {
            $token->delete();
        });

        return response()->json(['message' => 'Successfully logged out'], 200);
    }

    public function test(Request $request)
    {
        $user = $request->user(); // Get the authenticated user

        // Your logic here
        return response()->json(['message' => 'Access granted', 'user' => $user], 200);
    }
}
