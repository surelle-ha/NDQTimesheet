<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientsController extends Controller
{
    public function getAllClients(Request $request) {
        try {
            $clients = Client::all();
    
            if (!$clients) {
                return response()->json(['success' => false, 'res_api_code' => 'CLIENT501', 'message' => 'No client found.'], 200);
            }else{
                return response()->json(['success' => true, 'res_api_code' => 'CLIENT502', 'message' => 'Clients successfully fetched.', 'clients' => $clients], 200);
            }
        } catch (\Exception $e) {
            Client::error($e->getMessage());
            return response()->json(['success' => false, 'res_api_code' => 'CLIENT107', 'message' => 'Server error'], 500);
        }
    }
}
