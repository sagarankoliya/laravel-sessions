<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sessions = Session::where('user_id',Auth::id())->get();
        return view('home', compact('sessions'));
    }

    public function session_destroy()
    {
        $currunt_session = \Session::getId();
        $sessions = Session::where([['user_id',Auth::id()],['id','<>', $currunt_session]])->delete();
        return redirect()->back();
    }
}
