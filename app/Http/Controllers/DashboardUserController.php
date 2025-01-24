<?php

namespace App\Http\Controllers;
use App\User;
use App\Faqs;
use App\Feeds;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Support\Str;

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

    public function updgradeplan()
    {
        return view('users.plan');
    }

    // processs func upgrapde plan 

    // end processs func upgrapde plan 

    public function suggestion()
    {
        return view('users.faq');
    }

    public function suggestion_deliver(Request $request)
    {
        //dd(1);
        $this->validate($request, [
            'email' => 'min:1|max:255|required|email',
            'subject' => 'min:3|max:225|required',
            'message' => 'min:5|max:255|required',
            'file' => 'required|mimes:pdf',
        ]);

        $id = Auth::user()->id;
        $user = User::findOrFail($id);
        $uuid = (string) Str::uuid();
        $file = $request->file('file');
        $saved = time() . "_" . $uuid . "." . $file->getClientOriginalExtension();
        $uploadDir = 'attachment';

        $file->move(public_path($uploadDir), $saved);

        Faqs::create([
            'user_id' => $id,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'file' => $saved,
        ]);

        return redirect()->route('user.suggesstion', ['user' => $user->id])->with(['success.up' => 'Your questions '.$request->subject.' Success! Please waiting to reply']);

        //return view('users.faq');
    }

    public function make_feeds()
    {
        return view('users.feeds');
    }

    public function feeds_send(Request $request)
    {
        //dd(1);
        $this->validate($request, [
            'title' => 'min:1|max:255|required',
            'content' => 'min:3|required',
            'media' => 'required|mimes:jpeg,jpg,png,gif,mp4', 
        ]);

        $id = Auth::user()->id;
        $user = User::findOrFail($id);
        $uuid = (string) Str::uuid();
        $file = $request->file('media');
        $saved = time() . "-Laravuln-Feeds-" . $uuid . "." . $file->getClientOriginalExtension();
        $uploadDir = 'feeds-media';

        $file->move(public_path($uploadDir), $saved);

        Feeds::create([
            'user_id' => $id,
            'title' => $request->title,
            'content' => $request->content,
            'media' => $saved,
        ]);

        return redirect()->route('user.feeds', ['user' => $user->id])->with(['success.up' => 'Your feeds '.$request->subject.' Success! Upload']);

        //return view('users.faq');
    }
}
