<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class LoginController extends Controller
{
    public function save(Request $request) {
        Validator::make($request->all(), [
            'password' => ['required', 'confirmed', Password::min(8)],
            'name' => ['required', 'string'],
            'email' => ['required', 'email']
        ])
        ->validate();
        dd($request->all());
    }
}



