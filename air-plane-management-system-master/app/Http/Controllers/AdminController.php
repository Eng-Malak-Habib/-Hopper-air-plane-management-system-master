<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\flight;
use App\Models\pilot;
use App\Models\plan;
use App\Models\ticket;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function adminregisterationform()
    {
        return view('admin.registerform');
    }
    public function registeration(Request $request)
    {
    $data= $request->validate
        ([
            'name'          => 'required|string',
            'email'         => 'required|string',
            "password"      => 'required|string',
            "number" => 'required|integer',
        ]);
        $data['password']=bcrypt($data['password']);

    admin::create($data);
     return view('admin.loginform');
    }


    public function adminloginform()
    {
        return view('admin.loginform');

    }
    public function login(Request $request)
    {
    $DATA= Auth::guard('admin')->attempt($request->only('email', 'password'));
    if($DATA)
        {    
            $paln=plan::all();
            $pilot=pilot::all();
            $flights=flight::all();
            return view('admin.profile',
            [  'flights'=>$flights,
                'plane'=>$paln,
                'pilot'=>$pilot

            ]);
        }
        return back()->withErrors(['wrong logged information']);
    }
    
    
    
    public function addpilot(Request $request)
    {

        $data= $request->validate
        ([
            'name'          => 'required|string',
            'email'         => 'required|string',
            "password"      => 'required|string',
            "number" => 'required|integer',
            "active"        => 'required|Boolean',

        ]);
        $data['password']=bcrypt($data['password']);
        pilot::create($data);
    }
    public function addflight(Request $request)
    {

        $data= $request->validate
        ([
            'title'       => 'required|string',
            'from'        => 'required|string',
            'to'          => 'required|string',
            'start_date'  => 'required|date',
            'return_date' => 'required|date',
            'plan_id'     => 'required|integer',
            "pilot_id"    => 'required|integer',
            'price'       => 'required|integer',
        
        ]);
        flight::create($data);


    }
    public function addplane(Request $request)
    {

        $data= $request->validate
        ([
            'name'             => 'required|string',
            'capacity'         => 'required|integer',
        ]);
        plan::create($data);
     }

    public function show_all_flights()
    {
        $flights=flight::all();
        return view('',['flight'=>$flights]);
    }
    public function show_all_tickets()
    {
        $ticket=ticket::all();
        return view('',['ticket'=>$ticket]);
    }


    public function profile()
    {
        return view('admin.profile');
    }
    protected function guard()
    {
    return Auth::guard('admin');
    
    }  
    public function logout(Request $request)
    {
    
        Auth::guard('admin')->logout();       
        return view('admin.loginform');
    }

}
