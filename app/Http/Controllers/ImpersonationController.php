<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Scopes\TenantScope;
use Illuminate\Support\Facades\Auth;

class ImpersonationController extends Controller
{
    public function leave(Request $request)
    {
        // logout of current
        // login as super-admin
        if (!session()->has('impersonate')) {
            abort(403);
        }
        $originalUserId = session('impersonate');
        Auth::guard('web')->loginUsingId($originalUserId);
        session()->forget('impersonate');
        return redirect('dashboard');
    }
}
