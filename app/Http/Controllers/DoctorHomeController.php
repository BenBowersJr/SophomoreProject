<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function App\Http\Controllers\getNameByID as ControllersGetNameByID;

class DoctorHomeController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // returns name found by id
        function getNameByID($id) {
            $patient = DB::table('patients')
                            ->where('id', $id)
                            ->get()->first();
            $output = $patient->f_name." ".$patient->l_name;
            return $output;
        }
        $_SESSION['DH'] = DB::table('doctor_appointments')
                            ->leftJoin('employees', 'doctor_appointments.employee_id', '=', 'employees.id')
                            ->get()->toArray();

        $_SESSION['DH-names'] = [];
        foreach ($_SESSION['DH'] as $data) {
            $_SESSION['DH-names'][] = [$data->patient_id => getNameByID($data->patient_id)];
        }

        

        // dd($_SESSION['DH-names'], $_SESSION['DH']);
        return view('doctor-home');
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
        // returns name found by id
        function getNameByID($id) {
            $patient = DB::table('patients')
                            ->where('id', $id)
                            ->get()->first();
            $output = $patient->f_name." ".$patient->l_name;
            return $output;
        }
        $_SESSION['DH-upcoming'] = DB::table('doctor_appointments')
                        ->leftJoin('employees', 'doctor_appointments.employee_id', '=', 'employees.id')
                        ->whereDate('date', '>', $request->otherDate)
                        ->get()->toArray();
        $_SESSION['DH-UC-names'] = [];
        foreach ($_SESSION['DH'] as $data) {
            $_SESSION['DH-UC-names'][] = [$data->patient_id => getNameByID($data->patient_id)];
        }
        return redirect('doctor-home');
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
