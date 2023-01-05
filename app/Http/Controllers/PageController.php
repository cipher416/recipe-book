<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{

    public function regis(){
        return view('auth.register');
    }

    public function regisLogic(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|min:3',
            'email' =>'required|email:dns|unique:users',
            'password' => 'required|min:8',
            'address' => 'required|min:10',
            'phoneNumber' => 'required|min:10',
            'confirmPassword' => 'required|same:password'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => $validatedData['password'],
            'address'=> $validatedData['address'],
            'phone'=>  $validatedData['phoneNumber'],
            'role_id' => 2
        ]);

        $request->session()->flash('success', 'Registration Success! Please Login');

        return redirect('/login');
    }

    public function login(){
        return view('auth.login');
    }

    public function loginLogic(Request $request){
        $dataLogin = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($dataLogin)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }
        else{
            return back()->with('errorlogin', 'Login Failed!');
        }
    }

    public function about(){
        return view('about');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function profile(){
        return view('halaman.profile');
    }

    public function admin(){
        $recipes = Recipe::all();
        return view('admin.adminhome', compact('recipes'));
    }
}
