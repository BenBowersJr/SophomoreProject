<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('patient-info');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        session_start();
        if ($request->filterBy == 'patientID') {
            $_SESSION['patient-data'] = DB::table('patients')
                        ->where('id', $request->patientID)
                        ->get()->toArray();
            if ($request->patientID == 0){
                $_SESSION['patient-data'] = DB::table('patients')
                        ->get()->toArray();
            }
            return back();
        } elseif ($request->filterBy == 'patientName') {
            $_SESSION['patient-data'] = DB::table('patients')
                        ->where('f_name', $request->patientName)
                        ->get()->toArray();
            return back();
        } elseif ($request->filterBy == 'age') {
            $_SESSION['patient-data'] = DB::table('patients')
                        ->where('age', $request->age)
                        ->get()->toArray();
            return back();
        } elseif ($request->filterBy == 'emergencyNumber') {
            $_SESSION['patient-data'] = DB::table('patients')
                        ->where('ec_phone', $request->emergencyNumber)
                        ->get()->toArray();
            return back();
        } elseif ($request->filterBy == 'emergencyName') {
            $_SESSION['patient-data'] = DB::table('patients')
                        ->where('ec_name', $request->emergencyName)
                        ->get()->toArray();
            return back();
        } elseif ($request->filterBy == 'admissionDate') {
            $_SESSION['patient-data'] = DB::table('patients')
                        ->where('admission_date', $request->admissionDate)
                        ->get()->toArray();
            return back();
        }
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
