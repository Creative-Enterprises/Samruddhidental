<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
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
