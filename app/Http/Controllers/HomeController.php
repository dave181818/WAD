<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservations;
use Illuminate\Support\Facades\DB;

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
        $count = Reservations::where('id', '>', 0)->count();
        $all = Reservations::all();
        $checkouts = Reservations::where('checkout', '>='  ,'CURDATE() - INTERVAL 1 DAY AND checkout < CURDATE()')->get();
        $array = ([
            $count,
            $all,
            $checkouts
        ]);
        return view('home', compact('array'));
    }
}
