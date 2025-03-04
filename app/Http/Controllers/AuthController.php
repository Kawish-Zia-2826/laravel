<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register( Request $request )  {
        $data = $request->validate(
            [
                'name'=>'required',
                'email'=>'required|email',
                'password'=>'required|confirmed'
            ]
            );
            $auth = Auth::create($data);

            if ($auth) {
                return redirect()->route('login');
            }
            
    }
}
