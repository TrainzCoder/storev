<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function proses(Request $request)
    {
        $request->validate([
            'duUsername' => ['required'],
            'duPassword' => ['required']
        ]);
        $aturan = [
            'duUsername' => $request->duUsername,
            'password' => $request->duPassword
        ];
        if(Auth::attempt($aturan)) {
            $request->session()->regenerate();
            return redirect(route('home'));
        } else {
            return back()->withErrors(['pesan' => 'Username dengan Password Tidak Cocok']);
        }
    }
}
