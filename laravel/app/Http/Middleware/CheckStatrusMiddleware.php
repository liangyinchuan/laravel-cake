<?php

namespace App\Http\Middleware;

use Closure;

use DB;

class CheckStatrusMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $data = DB::table('config')->first();
        // dd($data);
        if (empty($data) || $data->status==2) {
            return redirect('/maintain');
            // return view('home.maintain');
        }
        return $next($request);
    }
}
