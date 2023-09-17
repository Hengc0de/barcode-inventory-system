<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'username' => ['required', 'string',  'max:20', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'customer_phone_number' => ['required', 'string', 'max:255'],
            'role' => ['required', 'string', 'max:255'],

        ]);

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,

            'email' => $request->email,
            'password' => Hash::make($request->password),
            'customer_phone_number' => $request->customer_phone_number,
            'role' => $request->role,

        ]);

        event(new Registered($user));

        Auth::login($user);
        $url = '';
        if ($request->user()->role === 'admin'){
            $url = '/index';
        }else if ($request->user()->role === 'employee'){
            $url = 'employee/index';
        }else if ($request->user()->role === 'customer'){
            $url = 'customer/index';
        }
        return redirect($url);
    }
}
