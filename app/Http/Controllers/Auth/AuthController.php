<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use App\Models\ParentCategory;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        $parentCategories = ParentCategory::query()->get();
        return view('nordiccell.auth.login', compact('parentCategories'));
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8'],
        ]);

        if (Auth::attempt($credentials)) {
            if (Auth::user()->hasRole('customer')) {
                return redirect()->route('nordiccell.home');
            }
            return redirect()->intended('auth/login');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function register(){
        $parentCategories = ParentCategory::query()->get();
        return view('nordiccell.auth.register', compact('parentCategories'));
    }

    public function register_store(AuthRequest $request): RedirectResponse
    {
        $params = $request->validated();

        $user = User::query()->create($params);
        $user->assignRole('customer');

        $credentials = $request->only('email', 'password');
        Auth::attempt($credentials);
        $request->session()->regenerate();
        return redirect('/')->with('success',"Account successfully registered.");
    }

    public function logoutIndex()
    {
        $parentCategories = ParentCategory::query()->get();
        return view('nordiccell.auth.logout', compact('parentCategories'));
    }
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
