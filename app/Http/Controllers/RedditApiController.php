<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RedditAPI;

class RedditApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $images = null;
        $user = \Auth::user();
        if($request->filled('query')) {
            $images = RedditAPI::search($request->input('query'), null, 'top', null, 'pics', 50);
        }
        return view('admin.reddit', compact('images','user'));

    }

}
