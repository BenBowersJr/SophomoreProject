<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Output\Output;

class CaregiverController extends Controller
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


        $_SESSION['CH'] = DB::table('caregivers')
                        ->whereNotNull('patient_id')
                        ->get()->toArray();
        $_SESSION['CH-names'] = [];
        foreach ($_SESSION['CH'] as $data) {
            $_SESSION['CH-names'][] = [$data->patient_id => getNameByID($data->patient_id)];
        }
        return view('caregiver-home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
