<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Http\Request;
use Session;

class LoginCheck extends Controller
{
    protected function login(Request $request)
    {
    // return DB::table('users')
    // ->where('email', $request->email)
    // ->get();

    $user = User::where('email', $request->email)
        ->get()
        ->first();

    if ($user && Hash::check($request->password, $user->password)) {
        $request->session()->put('user', $user);
        return redirect(route('HomePage'));
    } else {
        $request->session()->flash('sms', 'Wrong Credentials');
        return redirect(route('LoginPage'));
    }
    }

    protected function logout(){
        Session::forget('user');
        return redirect(route('HomePage'));
    }
}
