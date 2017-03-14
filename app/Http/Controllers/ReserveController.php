<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Reservations;
use Illuminate\Support\Facades\DB;


class ReserveController extends Controller
{
	
    public function store(Request $request) {
    	$add = new Reservations;
        $add->customer = $request->name;
        $add->contact = $request->contact;
        $add->checkin = $request->checkin;
        $add->checkout = $request->checkout;
        $add->services = $request->services;
        $add->charge = $request->charge;
        $add->staff = $request->staff;

        $add->save();
        $count = Reservations::where('id', '>', 0)->count();
		$all = Reservations::all();
		$date = date('Y-m-d H:i:s');
        $checkouts = Reservations::where('checkout', 'BETWEEN CURDATE() - INTERVAL 1 DAY AND CURDATE()')->get();
        $array = ([
			$count,
			$all,
            $checkouts
		]);

		return back()->withInput();
    }
}
