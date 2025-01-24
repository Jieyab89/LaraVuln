<?php

namespace App\Http\Controllers;
use App\User;
use App\Feeds;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function developer_notes()
    {
        return view('dev-notes');
    }

    public function feeds()
    {
        $feeds = Feeds::get();

        return view('feeds', compact('feeds'));
    }

    public function feeds_loader(Request $request)
    {
        $page = $request->get('page', 1);
        $feeds = Feeds::paginate(1); 

        if ($feeds->isEmpty()) {
            return response()->json(['html' => '']);
        }

        $html = view('partials', ['feeds' => $feeds])->render();

        return response()->json(['html' => $html]);
    }
}
