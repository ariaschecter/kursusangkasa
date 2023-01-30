<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use App\Models\User;
use App\Models\Wallet;
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
        return view('frontend.auth.register');
    }

    public function teacher_create(): View
    {
        return view('frontend.auth.register_teacher');
    }

    public function register_affiliate(User $user): View
    {
        return view('frontend.auth.register_affiliate', compact('user'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'username' => 'required|unique:users,username|alpha_dash',
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'wa_number' => 'required|integer',
        ]);

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'wa_number' => $request->wa_number,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'affiliate_id' => \App\Models\Setting::first()->default_affiliate,
        ]);

        Wallet::create([
            'id' => $user->id,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect()->route('dashboard');
    }

    public function teacher_store(Request $request): RedirectResponse
    {
        $request->validate([
            'username' => 'required|unique:users,username|alpha_dash',
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'wa_number' => 'required|integer',
        ]);

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'wa_number' => $request->wa_number,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'affiliate_id' => \App\Models\Setting::first()->default_affiliate,
            'role' => 'TEACHER'
        ]);

        Wallet::create([
            'id' => $user->id,
        ]);

        Teacher::create([
            'id' => $user->id,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect()->route('dashboard');
    }

    public function affiliate_store(Request $request, User $user): RedirectResponse
    {
        $request->validate([
            'username' => 'required|unique:users,username|alpha_dash',
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'wa_number' => 'required|integer',
        ]);

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'wa_number' => $request->wa_number,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'affiliate_id' => $user->id,
        ]);

        Wallet::create([
            'id' => $user->id,
        ]);

        Teacher::create([
            'id' => $user->id,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect()->route('dashboard');
    }
}
