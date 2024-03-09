<?php

use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\GroupsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LogController;
use Illuminate\Support\Facades\Route;


/* ----- USERS ----- */

/*
---> /user/auth/oauth 
Use OAuth UID to create new user, add more information about user.
*/

Route::post('/user/auth/login', [UsersController::class, 'login']);
Route::post('/user/auth/register', [UsersController::class, 'register']);

Route::post('/user/auth/validateToken', [UsersController::class, 'validateToken']);

Route::middleware('auth:sanctum')->group(function () {

    Route::post('/user/removeUser', [UsersController::class, 'removeUser']);
    
    Route::post('/client/auth/getAllClients', [ClientsController::class, 'getAllClients']);
    Route::post('/project/auth/getAllProjects', [ProjectsController::class, 'getAllProjects']);
    Route::post('/group/auth/getAllGroups', [GroupsController::class, 'getAllGroups']);
    Route::post('/user/auth/getAllUsers', [UsersController::class, 'getAllUsers']);

    Route::post('/user/auth/logout', [UsersController::class, 'logout']);
    Route::post('/user/auth/test', [UsersController::class, 'test']);
    Route::get('/user/auth/delete', function() { return response()->json(['st' => 200]); });
    Route::get('/user/auth/update', function() { return response()->json(['st' => 200]); });
    Route::get('/user/auth/status', function() { return response()->json(['st' => 200]); });
    
    
    Route::get('/role/add', function() { return response()->json(['st' => 200]); });
    Route::get('/role/update', function() { return response()->json(['st' => 200]); });
    Route::get('/role/delete', function() { return response()->json(['st' => 200]); });

    Route::post('/system/developer/getLogs', [LogController::class, 'getLogs']);
});
