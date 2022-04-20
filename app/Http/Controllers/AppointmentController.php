<?php

namespace App\Http\Controllers;

use App\Models\doctor_appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roster = DB::table('rosters')
            ->get()->toArray();
        $patients = DB::table('patients')
            ->get()->toArray();
        // dd($roster);
        return view('doctor-appointment', compact('roster', 'patients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $patient = DB::table('patients')
                        ->where('id', $request->patientID)
                        ->update(['admission_date' => $request->date]);
        
        
        $appointment = new doctor_appointment();
        $appointment->employee_id = $request->doctorID;
        $appointment->patient_id = $request->patientID;
        $appointment->date = $request->date;
        $appointment->comment = '';
        $appointment->morning_prescription = '';
        $appointment->afternoon_prescription = '';
        $appointment->night_prescription = '';
        $appointment->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
