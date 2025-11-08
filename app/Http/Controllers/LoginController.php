<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Email;

class loginController extends Controller
{
    public function index(){
        return view("login");
    }
    public function store(Request $request){
        $request->validate([
            "email"=> 'required|email',
            'password'=> 'required'

        ]);
        $credentials = $request->only('email','password');
        var_dump($credentials);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->route('tarefas.index')->with('success', 'Login efetuado com sucesso');
        }
        else{
            return redirect()->route('home')->with('error','Senha invalida');
        }
    }
}
