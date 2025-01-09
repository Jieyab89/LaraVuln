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

    public function profile_user_update(Request $request, $id)
    {
        //dd(1);
        $this->validate($request, [
            'name' => 'min:1|max:255|nullable',
            'email' => 'min:1|max:255|nullable|email',
            'pin' => 'min:5|max:6|nullable',
            'address' => 'min:5|max:255|nullable',
            'phone_number' => 'min:11|max:13|nullable',
            'password' => 'min:8|max:255|nullable',
        ]);

        $user = User::findOrFail($id);

        if ($request->has('name')) {
            $user->name = $request->name;
        }
        if ($request->has('email')) {
            $user->email = $request->email;
        }
        if ($request->has('pin')) {
            $user->pin = $request->pin;
        }
        if ($request->has('address')) {
            $user->address = $request->address;
        }
        if ($request->has('phone_number')) {
            $user->phone_number = $request->phone_number;
        }
        if ($request->has('password') && $request->password) {
            $user->password = bcrypt($request->password);  
        }

        $user->updated_at = now()->format('Y-m-d H:i:s');

        $user->save();

        return redirect()->route('user.data', ['user' => $user->id])->with(['success.up' => 'Data: '.$request->name.' Edited!']);
    }
}
