<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Vite;
use Symfony\Component\HttpFoundation\Response;

class AddSecurityHeaders
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        Vite::useCspNonce();

        $viteDevOrigins = [
            'http://localhost:5173',
            'http://127.0.0.1:5173',
            'https://localhost:5173',
            'https://127.0.0.1:5173',
        ];

        $scriptSrc = [
            "'self'",
            "'nonce-".Vite::cspNonce()."'",
            "'unsafe-inline'",
            "'unsafe-eval'",
        ];

        $styleSrc = [
            "'self'",
            "'unsafe-inline'",
        ];

        $fontSrc = [
            "'self'",
            'data:',
        ];

        $connectSrc = [
            "'self'",
            'https:',
            'ws:',
            'wss:',
        ];

        if (app()->isLocal()) {
            $scriptSrc = [...$scriptSrc, ...$viteDevOrigins];
            $styleSrc = [...$styleSrc, ...$viteDevOrigins];
            $fontSrc = [...$fontSrc, ...$viteDevOrigins];
            $connectSrc = [...$connectSrc, ...$viteDevOrigins];

            // Allow local Vite assets even if host/IP representation differs.
            $scriptSrc = [...$scriptSrc, 'http:', 'https:'];
            $styleSrc = [...$styleSrc, 'http:', 'https:'];
            $fontSrc = [...$fontSrc, 'http:', 'https:'];
        }

        $csp = implode('; ', [
            "default-src 'self'",
            "base-uri 'self'",
            "form-action 'self'",
            "frame-ancestors 'none'",
            "object-src 'none'",
            'script-src '.implode(' ', $scriptSrc),
            'style-src '.implode(' ', $styleSrc),
            'style-src-elem '.implode(' ', $styleSrc),
            "img-src 'self' data: blob: https:",
            'font-src '.implode(' ', $fontSrc),
            'connect-src '.implode(' ', $connectSrc),
        ]);

        $response = $next($request);

        $response->headers->set('Content-Security-Policy', $csp);
        $response->headers->set('X-Content-Type-Options', 'nosniff');
        $response->headers->set('X-Frame-Options', 'DENY');
        $response->headers->set('Referrer-Policy', 'strict-origin-when-cross-origin');
        $response->headers->set('Permissions-Policy', 'camera=(), microphone=(), geolocation=()');

        if ($request->isSecure()) {
            $response->headers->set(
                'Strict-Transport-Security',
                'max-age=31536000; includeSubDomains; preload'
            );
        }

        return $response;
    }
}
