<?php

namespace App\Http\Controllers;

use App\Models\doctor_appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AdminsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin-home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // returns name found by id
        function getNameByID($id) {
            $employee = DB::table('employees')
                            ->where('id', $id)
                            ->get()->first();
            $output = $employee->f_name." ".$employee->l_name;
            return $output;
        }
        $_SESSION['AH-appointments'] = DB::table('doctor_appointments')
                        ->whereDate('date', '=', $request->date)
                        ->get()->toArray();
                        dd($_SESSION['AH-appointments']);
        $_SESSION['AH-caregivers'] = DB::table('caregivers')
                        ->get()->toArray();
        $_SESSION['AH-patients'] = DB::table('patients')
                        ->get()->toArray();
        $_SESSION['AH-employees'] = DB::table('employees')
                        ->get()->toArray();
        return redirect('admin-home');
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
