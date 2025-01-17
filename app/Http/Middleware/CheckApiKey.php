<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckApiKey
{
    public function handle(Request $request, Closure $next): Response
    {
        $providedKey = $request->header('x-api-key')
            ?? $request->bearerToken();

        if (!$providedKey || $providedKey !== config('services.api_key')) {
            return response()->json([
                'error' => 'Api Key no valida o no ingresada.'
            ], 401);
        }

        return $next($request);
    }
}
