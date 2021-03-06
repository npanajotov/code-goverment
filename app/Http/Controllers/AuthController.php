<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('pages.auth.auth');
    }

    public function login(Request $request)
    {
        $user = User::where('KorisnickoIme', $request->username)->first();
        if ($user) {
            if (Auth::attempt(['KorisnickoIme' => $request->username, 'password' => $request->password], true)) {
                return redirect()->route('dashboard');
            }

            return back()->withErrors('Pogresna lozinka, pokusajte ponovo.')->withInput();
        }
        return back()->withErrors('Korisnicko koje ste uneli ne postoji.')->withInput();
    }

    public function register(Request $request)
    {
        $user = new User();
        $user->KorisnickoIme = $request->username;
        $user->JMBG = $request->JMBG;
        $user->password = bcrypt($request->password);
        $user->save();
        Auth::attempt(['KorisnickoIme' => $request->username, 'password' => $request->password], true);
        return redirect()->route('dashboard');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
