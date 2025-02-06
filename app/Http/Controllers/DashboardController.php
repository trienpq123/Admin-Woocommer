<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Laravel\Socialite\Facades\Socialite;

class DashboardController extends Controller
{
    public function login(Request $request)
    {
        return view('admin.login');
    }

    /**
     * Handle account login request
     *
     * @param LoginRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function loginPost(LoginRequest $request)
    {
        if (Auth::attempt($request->only(['email', 'password']))) {
            $request->session()->regenerate();
            \Log::info('Login successful', [
                'user_id' => Auth::id(),
                'session_id' => session()->getId()
            ]);

            return redirect()->intended(route('admin.DashboardAdmin'));
        }

        \Log::error('Login error', [
            'error' => 'Invalid credentials',
            'user_email' => $request->input('email'),
            'session_id' => session()->getId()
        ]);

        throw ValidationException::withMessages([
            'email' => trans('auth.failed'),
        ]);
    }

    /**
     * Handle response after user authenticated
     *
     * @param Request $request
     * @param Auth $user
     *
     * @return \Illuminate\Http\Response
     */
    protected function authenticated(Request $request, $user)
    {
        return redirect()->intended(RouteServiceProvider::HOME);
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function redirectToGoogle(Request $request){
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(Request $request,$driver)
    {
        try {
            $user = Socialite::driver($driver)
            ->setHttpClient(new \GuzzleHttp\Client(['verify' => false]))
            ->stateless()
            ->user();
        } catch (\Exception $e) {
            \Log::error('Login error', [
                'error' => $e->getMessage(),
                'user_email' => $request->input('email'),
                'session_id' => session()->getId()
            ]);
            return redirect()->route('login');
        }
        $existsUser = User::where('email', $user->getEmail())->first();
        if ($existsUser) {
            Auth::login($existsUser, true);
            return redirect()->intended('admin/dashboard');
        }else{
            $newUser = User::create([
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'password' => '123456',
                'provider_name' => $driver,
                'provider_id' => $user->getId(),
            ]);
            Auth::login($newUser, true);
        }
        $request->session()->regenerate();
        return redirect()->intended('admin/dashboard');
    }

    public function redirectToProvider($driver){
        return Socialite::driver($driver)->redirect();
    }
}
