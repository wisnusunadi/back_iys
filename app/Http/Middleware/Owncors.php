<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Owncors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Define the headers

        if ($request->is('api/music/detail/*')) {
    $headers = [
        'Access-Control-Allow-Origin' => '*',
        'Access-Control-Allow-Methods' => 'POST, GET, OPTIONS, PUT, PATCH, DELETE',
        'Access-Control-Allow-Headers' => 'Access-Control-Allow-Headers, Origin,Accept, X-Requested-With, Content-Type, Access-Control-Request-Method, Authorization, Access-Control-Request-Headers',
    ];

    // Handle OPTIONS request
    if ($request->isMethod('OPTIONS')) {
        return response('OK', 200)->withHeaders($headers);
    }

    // Proceed with the request
    $response = $next($request);

    // Set the headers on the response
    foreach ($headers as $key => $value) {
        if ($response instanceof \Illuminate\Http\Response) {
            $response->header($key, $value);
        } elseif ($response instanceof \Symfony\Component\HttpFoundation\Response) {
            $response->headers->set($key, $value);
        }
    }

   
    }
    else{
        header("Access-Control-Allow-Origin: *");
        // header('Access-Control-Allow-Credentials', 'true');

        $headers = [
            'Access-Control-Allow-Methods' => 'POST, GET, OPTIONS, PUT, DELETE',
            'Access-Control-Allow-Headers' => 'Content-Type, X-Auth-Token, Origin, Authorization, X-Requested-With',
            // 'Access-Control-Allow-Credentials' => 'true'
        ];
        if ($request->getMethod() == "OPTIONS") {
            return response('OK')
                ->withHeaders($headers);
        }

        $response = $next($request);
        foreach ($headers as $key => $value)
            $response->header($key, $value);
    }
    return $response;
    }
}
