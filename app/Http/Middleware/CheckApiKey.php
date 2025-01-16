<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckApiKey
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $providedKey = $request->header('x-api-key')
            ?? $request->bearerToken(); // soporta 'Authorization: Bearer <token>' o 'x-api-key'

        if (!$providedKey || $providedKey !== config('services.api_key')) {
            return response()->json([
                'error' => 'Invalid or missing API key.'
            ], 401);
        }

        return $next($request);
    }
}
