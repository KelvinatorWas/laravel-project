<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function register()
    {

        return view('users.register');
    }

    public function login()
    {

        return view('users.login');
    }

    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'Logged Out Successfully');
    }

    public function loginUser(Request $request)
    {
        $formFields = $request->validate([
            "email" => ["required", "email"],
            "password" => "required",
        ]);

        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/')->with('success', "Logged In Successfully");
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');

    }


    public function store(Request $request) {
        $formFields = $request->validate([
            "name" => ["required", "min:3"],
            "email" => ["required", "email", Rule::unique('users', 'email')],
            "password" => ["required", "confirmed", 'min:6'],
        ]);

        $formFields['password'] = bcrypt($formFields['password']);

        $user = User::create($formFields);

        auth()->login($user);

        return redirect('/')->with('success', 'User created and was logged in!');
    }

}
