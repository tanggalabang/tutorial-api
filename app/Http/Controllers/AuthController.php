<?php

namespace App\Http\Controllers;

use App\Models\Society;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'id_card_number' => 'required',
            'password' => 'required'
        ]);

        $society = Society::with('regional')
            ->where('id_card_number', $request->id_card_number)
            ->where('password', $request->password)
            ->first();

        if (!$society) {
            return response()->json(['message' => 'ID Card Number or Password incorrect'], 401);
        }

        $token = md5($society->id_card_number);
        $society->update(['login_tokens' => $token]);

        return response()->json([
            'name' => $society->name,
            'born_date' => $society->born_date,
            'gender' => $society->gender,
            'address' => $society->address,
            'token' => $token,
            'regional' => $society->regional->only(['id', 'province', 'district']),
        ], 200);
    }

    public function logout(Request $request)
    {
        $token = $request->input('token');

        $society = Society::where('login_tokens', $token)->first();

        if (!$token) {
            return response()->json(['message' => 'Invalid token'], 401);
        }

        $society->login_tokens = null;
        $society->save();

        return response()->json(['message' => 'Logout success']);
    }
}
