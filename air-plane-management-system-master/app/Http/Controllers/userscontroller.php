<?php

namespace App\Http\Controllers;

use App\Models\flight;
use App\Models\ticket;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class userscontroller extends Controller
{


    public function userregisterationform()
    {
        return view('user.registerform');
    }
    public function userregisteration(Request $request){
        $data=$request->validate
        ([
            'name'=>'required|string',
            'email'=>'required|email',
            'password'=>'required|string',
            'location'=>'required|string',
            'number'=>'required|integer',
        ]);
        $data['password']=bcrypt($data['password']);

        User::create($data);
        return view('user.loginform');
    }

    public function userloginform()
    {
        return view('user.loginform');
    }
    public function userlogin(Request $request)
    {
        $DATA= Auth::attempt($request->only('email', 'password'));
        if($DATA)
    {
        $flights=flight::all();

    $rice = DB::table('tickets')
    ->where('passenger_id',Auth::user()->id)
    ->get();
    return view('user.profile',
    [
        'rice'=>$rice,
        'flights'=>$flights
]);

    }
    }

    public function show_all_flights()
    {
        $flights=flight::all();
        return view('',['flight'=>$flights]);
    }
    public function book_flight(Request $request)
    {
        $data=$request->validate
        ([
            'flight_id'=>'required|string',
            'passenger_id'=>'required|integer',
            'seats'=>'required|integer',
            'total'
        ]);
        $data = $request->all(); 

        $data['passenger_id']=Auth::user()->id;
        $data['total'] = $request->price * $request->seats; 
        ticket::create($data);


        $rice = DB::table('tickets')
        ->where('passenger_id',Auth::user()->id)
        ->get();
        $flights=flight::all();

        return view('user.profile',
        [
            'rice'=>$rice,
            'flights'=>$flights
    ]);
    }
public function find_fligh($id)
{
$data=flight::findOrFail($id);
return view('flight.info',['data'=>$data]);
}
public function show_ticket(){

    $flights=flight::all();

    $rice = DB::table('tickets')
    ->where('passenger_id',Auth::user()->id)
    ->get();
    return view('user.profile',
    [
        'rice'=>$rice,
        'flights'=>$flights
]);

  
  
}
public function userlogout()
{
    Auth::guard('web')->logout();
    return redirect('/userloginform');
}
 


}
