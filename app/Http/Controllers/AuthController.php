<?php

// app/Http/Controllers/AuthController.php

namespace App\Http\Controllers;

use App\Models\Regional;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Society; // Import your Society model

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('id_card_number', 'password');

        // Validate the credentials
        $user = Society::where('id_card_number', $credentials['id_card_number'])
            ->where('password', $credentials['password'])
            ->first();

        if (!$user) {
            return response()->json(['message' => 'ID Card Number or Password incorrect'], 401);
        }

        // Generate token (MD5 of ID Card Number)
        $token = md5($user->id_card_number);
        $user->login_tokens = $token;
        $user->save();

        $regionalInfo = Regional::find($user->regional_id);

        $response = [
            'name' => $user->name,
            'born_date' => $user->born_date,
            'gender' => $user->gender,
            'address' => $user->address,
            'token' => $user->login_tokens,
            'regional' => [
                'id' => $regionalInfo->id,
                'province' => $regionalInfo->province,
                'district' => $regionalInfo->district,
            ],
        ];

        return response()->json($response, 200);
    }

    public function logout(Request $request)
    {
        $token = $request->input('token');

        // Find the user based on the token
        $user = Society::where('login_tokens', $token)->first();

        if (!$user) {
            return response()->json(['message' => 'Invalid token'], 401);
        }

        // Clear the token on logout
        $user->login_tokens = null;
        $user->save();

        return response()->json(['message' => 'Logout success']);
    }
}
