<?php

namespace App\Http\Controllers;

use App\Models\employee;
use App\Models\family_member;
use App\Models\patient;
use App\Models\roles;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (isset($_GET['sub']) == 'Login')
        {
            if (employee::whereEmail($request->email)->exists()) {
                $user = employee::whereEmail($request->email)->first();
                $type = 'E';
            }
            else if (patient::whereEmail($request->email)->exists()) {
                $user = patient::whereEmail($request->email)->first();
                $type = 'P';
            }
            else if (family_member::whereEmail($request->email)->exists()) {
                $user = family_member::whereEmail($request->email)->first();
                $type = 'F';
            }
            else return 'Email not found...';

            if ($request->password == $user->password)
            {
                session_start();
                $_SESSION['type'] = $type;
                $_SESSION['logged_in'] = true;
                $_SESSION['id'] = $user->id;
                $_SESSION['role_name'] = roles::where('id', $user->role_id)->pluck('title')->first();
                $_SESSION['role_id'] = roles::where('id', $user->role_id)->pluck('id')->first();
                $_SESSION['access_level'] = roles::where('id', $user->role_id)->pluck('access_level')->first();
                if (roles::where('id', $user->role_id)->pluck('title')->first() . '-home' == 'supervisor-home') {
                    return(redirect('approve-user'));
                }
                return redirect(roles::where('id', $user->role_id)->pluck('title')->first() . '-home');
            }
            else return 'Incorrect password!';
        }
        else return abort(404);
    }
}
