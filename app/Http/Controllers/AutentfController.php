<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;


class AutentfController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['Greska prilikom registracije', $validator->errors()]);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $token = $user->createToken('F_Registracija_Token_')->plainTextToken;

        $odgovor = [
            'Korisnik: ' => $user,
            'Registracija token: ' => $token,
        ];

        return response()->json($odgovor);
    }



    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['Greska prilikom logina', $validator->errors()]);
        }

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response(['Info poruka: ' => 'Email ili password pogresni']);
        } else {
            $token = $user->createToken('F_Login_Token')->plainTextToken;
            $odgovor = [
                'Korisnik: ' => $user,
                'Login token: ' => $token
            ];

            return response()->json($odgovor);
        }
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();
        return response()->json('Uspesno izvrsen logout');
    }
}
