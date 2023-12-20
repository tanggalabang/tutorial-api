<?php

namespace App\Http\Middleware;

use App\Models\Society;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerifySocietyToken
{
    public function handle(Request $request, Closure $next): Response
    {
        $token = $request->query('token');
        $society = Society::where('login_tokens', $token)->first();

        if (!$token) {
            return response()->json(['message' => 'Unauthorized user'], 401);
        }

        $request->attributes->add(['authenticatedSociety' => $society]);

        return $next($request);
    }
}
