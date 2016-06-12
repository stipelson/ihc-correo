<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Auth;
use Crypt;

class LoginController extends Controller
{
	public function index(){
		return view('login.login');
	}
	public function authenticate(Request $request)
	{
		if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            // Authentication passed...'inicio'
			return redirect()->intended('/');
		}
		return redirect('login')->withErrors([
			'error' => 'El correo o la contraseña son incorrectos',
			]);
	}
	public function logout(){
		Auth::logout();
		return redirect('login');
	}
}
