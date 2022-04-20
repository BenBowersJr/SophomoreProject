<?php

namespace App\Http\Controllers;

use App\Models\caregiver;
use App\Models\employee;
use App\Models\roster;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewRosterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supervisors = DB::table('employees')
            ->where('role_id', '=', '2')
            ->get()->toArray();
        $doctors = DB::table('employees')
            ->where('role_id', '=', '3')
            ->get()->toArray();
        $caregivers = DB::table('employees')
            ->where('role_id', '=', '4')
            ->get()->toArray();
        return view('new-roster', compact('supervisors', 'doctors', 'caregivers'));
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
        
        $roster = new roster;
        $roster->date = $request->date;
        $roster->supervisor = getNameByID($request->supervisorID);
        $roster->doctor = getNameByID($request->doctorID);
        $roster->caregiver1 = getNameByID($request->caregiver1ID);
        $roster->caregiver2 = getNameByID($request->caregiver2ID);
        $roster->caregiver3 = getNameByID($request->caregiver3ID);
        $roster->caregiver4 = getNameByID($request->caregiver4ID);
        $roster->supervisorID = $request->supervisorID;
        $roster->doctorID = $request->doctorID;
        $roster->caregiver1ID = $request->caregiver1ID;
        $roster->caregiver2ID = $request->caregiver2ID;
        $roster->caregiver3ID = $request->caregiver3ID;
        $roster->caregiver4ID = $request->caregiver4ID;
        $roster->save();

        //this was for later, might delete, likely to get forgotten.
        // $caregiver1 = DB::table('caregivers')
        //                 ->where('id', $request->caregiver1ID)
        //                 ->update(['date' => $request->date]);
        
        return redirect('roster');
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
