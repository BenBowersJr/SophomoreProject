<?php

namespace App\Http\Middleware;

use App\Models\employee;
use App\Models\family_member;
use App\Models\patient;
use App\Models\roles;
use Closure;
use Illuminate\Http\Request;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $access_level)
    {
        session_start();
        if (isset($_SESSION['type']) && $_SESSION['type'] == 'E')
            $approved = employee::where('id', $_SESSION['id'])->pluck('approved')->first();
        else if (isset($_SESSION['type']) && $_SESSION['type'] == 'P')
            $approved = patient::where('id', $_SESSION['id'])->pluck('approved')->first();
        else if (isset($_SESSION['type']) && $_SESSION['type'] == 'F')
            $approved = family_member::where('id', $_SESSION['id'])->pluck('approved')->first();
        else return response('Please login before accessing this page.');

        if ($approved) {
            $access_level = explode(' ', $access_level);
            $lowest_req = roles::where('access_level', $access_level[0])->pluck('title')->first();

            foreach ($access_level as $level) {
                if (isset($_SESSION['access_level']) && $_SESSION['access_level'] == $level)
                    return $next($request);
            }
            return response('Please log in as a ' . $lowest_req . ' to access this page!');
        }
        else return response('Please await admin approval before proceeding.');
        

        // return $next($request); // For tristan >:(
    }
}
