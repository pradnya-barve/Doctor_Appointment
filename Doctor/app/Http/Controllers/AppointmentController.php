<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    //
    public function save(Request $request){
        //dd($request->all());
        $patient = new Appointment([
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'timing'=>$request->get('timing')
        ]);
        $patient->save();

        return redirect()->back();
    }
}
