<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Show Signup Form
    public function showSignupForm()
    {
        return view('auth.signup');
    }

    // Handle Signup Request
    public function signup(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'telephone' => 'required|string|max:15',
            'email' => 'required|email|unique:employees,email',
            'password' => 'required|min:8|confirmed',
            'image' => 'nullable|image|max:2048',
        ]);
    
        $imagePath = $request->file('image') 
            ? $request->file('image')->store('employees', 'public') 
            : null;
    
        Employee::create([
            'name' => $request->name,
            'telephone' => $request->telephone,
            'email' => $request->email,
            'image' => $imagePath,
            'password' => Hash::make($request->password), // Hash password
        ]);
    
        return redirect()->route('login')->with('success', 'Signup successful. Please log in.');
    }
    
    // Show Login Form
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Handle Login Request
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // Check if the credentials are valid
        if (Auth::attempt($credentials)) {
            return redirect('/dashboard'); // Redirect to dashboard on successful login
        }

        // Debugging Block: Use this only to debug issues
        /*
        dd([
            'provided_credentials' => $credentials,
            'user_exists' => Employee::where('email', $credentials['email'])->exists(),
            'hashed_password' => Employee::where('email', $credentials['email'])->value('password'),
            'password_verification' => Hash::check($credentials['password'], Employee::where('email', $credentials['email'])->value('password')),
        ]);
        */

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    // Handle Logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
