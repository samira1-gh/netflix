<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Films;
use Illuminate\Support\Str;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   
    // public function showTo()
    // {
     
    // //  return $campaign;
    //  return view('home', []);
    // }
    public function index()
    {
        $paginate = Films::with('user')->paginate(27);
        
        return view('home', ['films' => $paginate]);
    }
     
     
    

}
