<?php

namespace App\Http\Responses;

use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;
use MongoDB\Driver\Session;

class LoginResponse implements LoginResponseContract
{

    public function toResponse($request)
    {

        // below is the existing response
        // replace this with your own code
        // the user can be located with Auth facade
        if(auth()->user()->hasRole('no-tenant')){
            $request->session()->flash('error', 'No Tenant!');
            return redirect('tables');
        }

        return $request->wantsJson()
            ? response()->json(['two_factor' => false])
            : redirect()->intended(config('fortify.home'));
    }

}