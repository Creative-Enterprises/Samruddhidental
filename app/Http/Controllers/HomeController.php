<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home');
    }
      public function allappointments()
    {
        $apt=Appointment::all();

        return view('admin.allappointments',['apt'=>$apt]);
    }

    public function make_appointment(Request $request){
        $apt =new Appointment();
        $apt->name = $request->name;
        $apt->phone_no = $request->phone_no;
        $apt->email = $request->email;
        $apt->appointment_date = $request->appointment_date;
        $apt->appointment_time = $request->appointment_time;
        $apt->services = $request->services;
        $apt->message = $request->message;
        $apt->save();
        return redirect()->back();

    }

}
