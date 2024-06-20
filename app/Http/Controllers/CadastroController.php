<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CadastroController extends Controller
{
    public function save(Request $request) {
            $user = Validator::make($request->all(), [
            'password' => ['required', 'confirmed', "min:8"],
            'name' => ['required', 'string'],
            'email' => ['required', 'email']
        ])
        ->validate();
        User::create($request->except("_token"));
        Auth::attempt(['email' => $request->email, 'password' => $request->password]);
        return redirect("/");
    }
}



