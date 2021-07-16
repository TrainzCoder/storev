<?php

namespace App\Http\Controllers;

use App\Models\DataUser;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }
    public function proses(Request $request)
    {
        $request->validate([
            'duNama' => ['required'],
            'duUsername'=> ['required'],
            'duPassword' => ['required'],
            'duEmail' => ['required', 'unique:data_users,duEmail', 'email'],
        ]);
        $data = DataUser::create([
            'duNama' => $request->duNama,
            'duUsername' => $request->duUsername,
            'duPassword' => bcrypt($request->duPassword),
            'duEmail' => $request->duEmail,
        ]);
        if ($data->save()) {
            return redirect(route('login.index'));
        }
    }
}
