<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function login(Request $request) {
        $user = Validator::make($request->all(), [
        'password' => ['required', "min:8"],
        'name' => ['required', 'string'],
        'email' => ['required', 'email']
    ])
    ->validate();
    if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
        return redirect("/dashboard");
    }else{
        return redirect("/")->withErrors(["erros" => "Login ou Senha Incorreto !!!"]);
    }
}
}
