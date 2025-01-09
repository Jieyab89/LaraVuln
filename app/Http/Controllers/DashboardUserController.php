<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\AuthenticationException;

class DashboardUserController extends Controller
{
    public function profile_user_get_page()
    {
        $user = Auth::user();
        
        if (!$user) {
            throw new AuthenticationException('Unauthenticated.');
        }

        return view('users.profile', compact('user'));
    }

    public function profile_user_get_data($id)
    {
        $user = User::findOrFail($id);
        
        return view('users.profile', compact('user'));
    }
}
