<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PilotController extends Controller
{
    //pilot

    
    public function pilotloginform()
    {
        return view('pilot.loginform');

    }
    public function pilotlogin(Request $request)
    {
    $DATA= Auth::guard('pilot')->attempt($request->only('email', 'password'));
    if($DATA)
        {    
            $price = DB::table('flights')
            ->where('pilot_id',auth::guard('pilot')->user()->id)
            ->get();
            return view('pilot.profile',
            [  
                'flights'=> $price
            ]);
        }
        return back()->withErrors(['wrong logged information']);
    }
}
