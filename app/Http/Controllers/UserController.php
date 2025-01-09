<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return response()->view('users.index', [
            'message' => 'Forbiden!'
        ], 403); 
    }

    public function get_users($id)
    {
        $user = User::findOrFail($id);
        
        return response()->json($user, 200);
        //return view('users.data', compact('user'));
    }
}
