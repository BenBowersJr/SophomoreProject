<?php

namespace App\Http\Controllers;

use App\Models\caregiver;
use App\Models\employee;
use App\Models\family_member;
use Carbon\Carbon;
use App\Models\patient;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate((['userType' => 'required', 'email' => 'required']));
        if (!employee::whereEmail($request->email)->exists() && 
            !patient::whereEmail($request->email)->exists()  && 
            !family_member::whereEmail($request->email)->exists())
        {
            switch ($request->userType) 
            {
                case "Patient":
                    $request->validate([
                        'fName' => 'required',
                        'lName' => 'required',
                        'email' => 'required',
                        'phone' => 'required',
                        'password' => 'required',
                        'DOB' => 'required',
                        'FamilyPassword' => 'required',
                        'FamilyContactName' => 'required',
                        'FamilyContactNumber' => 'required',
                        'FamilyRelation' => 'required'
                    ]);
    
                    $patient = new patient;
                    $patient->f_name = $request->fName;
                    $patient->l_name = $request->lName;
                    $patient->email = $request->email;
                    $patient->phone = $request->phone;
                    $patient->password = $request->password;
                    $patient->age = Carbon::parse($request->DOB)->age;
                    $patient->dob = $request->DOB;
                    $patient->family_password = $request->FamilyPassword;
                    $patient->ec_phone = $request->FamilyContactNumber;
                    $patient->ec_name = $request->FamilyContactName;
                    $patient->ec_relation = $request->FamilyRelation;
                    $patient->save();
                    return redirect('login');
                    break;

                case "Doctor":
                    $request->validate([
                        'fName' => 'required',
                        'lName' => 'required',
                        'email' => 'required',
                        'phone' => 'required',
                        'password' => 'required'
                    ]);
    
                    $doctor = new employee();
                    $doctor->f_name = $request->fName;
                    $doctor->l_name = $request->lName;
                    $doctor->role_id = 3;
                    $doctor->email = $request->email;
                    $doctor->password = $request->password;
                    $doctor->save();
                    break;

                case "Caregiver":
                    $request->validate([
                        'fName' => 'required',
                        'lName' => 'required',
                        'email' => 'required',
                        'phone' => 'required',
                        'password' => 'required'
                    ]);
    
                    $employee = new employee();
                    $employee->f_name = $request->fName;
                    $employee->l_name = $request->lName;
                    $employee->email = $request->email;
                    $employee->password = $request->password;
                    $employee->role_id = 4;
                    $employee->save();
    
                    $caregiver = new caregiver();
                    $caregiver->employee_id = $employee->id;
                    $caregiver->save();
                    break;

                case "Admin":
                    $request->validate([
                        'fName' => 'required',
                        'lName' => 'required',
                        'email' => 'required',
                        'phone' => 'required',
                        'password' => 'required'
                    ]);
    
                    $admin = new employee();
                    $admin->f_name = $request->fName;
                    $admin->l_name = $request->lName;
                    $admin->email = $request->email;
                    $admin->password = $request->password;
                    $admin->role_id = 1;
                    $admin->save();
                    break;

                case "Supervisor":
                    $request->validate([
                        'fName' => 'required',
                        'lName' => 'required',
                        'email' => 'required',
                        'phone' => 'required',
                        'password' => 'required'
                    ]);
    
                    $supervisor = new employee();
                    $supervisor->f_name = $request->fName;
                    $supervisor->l_name = $request->lName;
                    $supervisor->email = $request->email;
                    $supervisor->password = $request->password;
                    $supervisor->role_id = 2;
                    $supervisor->save();
                    break;

                case "Family Member":
                    $request->validate([
                        'fName' => 'required',
                        'lName' => 'required',
                        'email' => 'required',
                        'phone' => 'required',
                        'password' => 'required',
                        'DOB' => 'required'
                    ]);
    
                    $family = new family_member();
                    $family->family_password = $request->FamilyPassword;
                    $family->f_name = $request->fName;
                    $family->l_name = $request->lName;
                    $family->email = $request->email;
                    $family->phone = $request->phone;
                    $family->password = $request->password;
                    $family->dob = $request->DOB;
                    $family->save();
                    break;
            }
            return redirect('login');
        }
        else return "Email already exists!";
    }
}
