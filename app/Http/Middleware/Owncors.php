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
        // // return $next($request)
        // // ->header('Access-Control-Allow-Origin', '*')
        // // ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, PATCH, DELETE, OPTIONS')
        // // ->header('Access-Control-Allow-Headers', 'Content-Type, Authorization');




        // //lama
        // header("Access-Control-Allow-Origin: *");
        // // header('Access-Control-Allow-Credentials', 'true');

        // $headers = [
        //     'Access-Control-Allow-Methods' => 'POST, GET, OPTIONS, PUT, DELETE',
        //     'Access-Control-Allow-Headers' => 'Content-Type, X-Auth-Token, Origin, Authorization, X-Requested-With',
        //     // 'Access-Control-Allow-Credentials' => 'true'
        // ];
        // if ($request->getMethod() == "OPTIONS") {
        //     return response('OK')
        //         ->withHeaders($headers);
        // }

        // $response = $next($request);
        // foreach ($headers as $key => $value)
        //     $response->header($key, $value);
        // return $response;
        $response = $next($request);
$IlluminateResponse = 'Illuminate\Http\Response';
$SymfonyResopnse = 'Symfony\Component\HttpFoundation\Response';
$headers = [
    'Access-Control-Allow-Origin' => '*',
    'Access-Control-Allow-Methods' => 'POST, GET, OPTIONS, PUT, PATCH, DELETE',
    'Access-Control-Allow-Headers' => 'Access-Control-Allow-Headers, Origin,Accept, X-Requested-With, Content-Type, Access-Control-Request-Method, Authorization , Access-Control-Request-Headers',
];

if($response instanceof $IlluminateResponse) {
    foreach ($headers as $key => $value) {
        $response->header($key, $value);
    }
    return $response;
}

if($response instanceof $SymfonyResopnse) {
    foreach ($headers as $key => $value) {
        $response->headers->set($key, $value);
    }
    return $response;
}

return $response;
    }
}
