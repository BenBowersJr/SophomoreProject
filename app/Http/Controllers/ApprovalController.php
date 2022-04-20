<?php

namespace App\Http\Controllers;

use App\Models\employee;
use App\Models\family_member;
use App\Models\patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApprovalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patient = DB::table('patients')
            ->where('approved', '=', '0')
            ->get()->toArray();
        $employee = DB::table('employees')
            ->where('approved', '=', '0')
            ->get()->toArray();
        $family = DB::table('family_members')
            ->where('approved', '=', '0')
            ->get()->toArray();
        $roles = DB::table('roles')
            ->get()->toArray();
        return view('approve-user', compact('patient', 'employee', 'family', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        for ($i = 0; $i < $request->patient_total; $i++) {
            if ($request['patient_approve_' . $i]) {
                $user = patient::find($request['patient_id_' . $i]);
                $user->approved = 1;
                $user->save();
            }
        }
        for ($i = 0; $i < $request->family_total; $i++) {
            if ($request['family_approve_' . $i]) {
                $user = family_member::find($request['family_id_' . $i]);
                $user->approved = 1;
                $user->save();
            }
        }
        for ($i = 0; $i < $request->employee_total; $i++) {
            if ($request['employee_approve_' . $i]) {
                $user = employee::find($request['employee_id_' . $i]);
                $user->approved = 1;
                $user->save();
            }
        }
        return back();
    }
}
