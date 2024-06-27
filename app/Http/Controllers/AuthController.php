<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function loadRegister()
    {
        if(Auth::user()){
            $route = $this->redirectDash();
            return redirect($route);
        }
        return view('register')->with('title', 'register');
    }

    public function register(Request $request)
{
    $request->validate([
        'name' => 'string|required|min:2',
        'email' => 'string|email|required|max:100|unique:users',
        'password' =>'string|required|confirmed|min:6'
    ]);

    // Menentukan peran default jika pengguna tidak memilih peran saat mendaftar
    $defaultRole = 4; // Misalnya, peran 4 adalah peran pengguna biasa

    $user = new User;
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);
    
    // Menentukan peran pengguna saat mendaftar
    if ($request->has('role')) {
        $user->role = $request->role;
    } else {
        $user->role = $defaultRole;
    }

    $user->save();

    return back()->with('success','Your Registration has been successful.');
}


    public function loadLoginAdmin()
{
    
    if(Auth::user()){
        $route = $this->redirectDash();
        return redirect($route);
    }
    return view('user.log_admin'); // Mengirimkan variabel $title ke view
}

public function loadLoginKabid()
{
    // Definisi variabel $title
    if(Auth::user()){
        $route = $this->redirectDash();
        return redirect($route);
    }
    return view('user.log_kabid'); // Mengirimkan variabel $title ke view
}

public function loadLoginUser()
{
    // Definisi variabel $title
    if(Auth::user()){
        $route = $this->redirectDash();
        return redirect($route);
    }
    return view('user.log_user'); // Mengirimkan variabel $title ke view
}


function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ], [
        'email.required' => 'Email tidak boleh kosong',
        'email.email' => 'Format email tidak valid',
        'password.required' => 'Password tidak boleh kosong',
    ]);

    $credentials = $request->only('email', 'password');

    if(Auth::attempt($credentials)){
        $user = Auth::user();

        if($user->role == 1){
            return redirect()->route('admin.index'); // Assuming admin dashboard route is named 'admin.dashboard'
        } elseif($user->role == 2){
            return redirect()->route('kabid.dashboard'); // Assuming kabid dashboard route is named 'kabid.dashboard'
        } elseif($user->role == 3){
            return redirect()->route('user.dashboard'); // Assuming user dashboard route is named 'user.dashboard'
        }
    }
    else{
        return back()->with('error','Username & Password is incorrect');
    }
}


    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return redirect('/');
    }
    
    

}


