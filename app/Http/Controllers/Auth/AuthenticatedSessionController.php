<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();

            if ($user->status !== 'active') {
                auth()->logout();
                return redirect()->back()
                    ->withInput($request->only('email'))
                    ->withErrors(['email' => 'Your account is not active.']);
            }
dd('s');
            // Redirect based on role
            switch ($user->role->name) {
                case 'admin':
                    return redirect()->route('admin.dashboard');
                case 'distributor':
                    return redirect()->route('distributor.dashboard');
                case 'stockist':
                    return redirect()->route('stockist.dashboard');
                default:
                    return redirect()->route(RouteServiceProvider::HOME);
            }
        }

        return back()->withErrors([
            'email' => 'These credentials do not match our records.',
        ]);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
