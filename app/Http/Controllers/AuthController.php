<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //login
    public function prosessLogin(Request $request)
    {
        if (Auth::guard('karyawan')->attempt([
            'nik' => $request->nik,
            'password' => $request->password
        ])) {
            return redirect('/dashboard');
        } else {
            return redirect('/');
        }
    }
}
