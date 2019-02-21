<?php

namespace App\Http\Middleware;

use Closure;

use DB;

class HomeMiddleware
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
        $data = session('user');
        // dd($data);
        if (empty($data)) {
            # code...
            return redirect('/home/login')->with('warning','您还没有登录,请先登录吧!');
        }

        $user = $data[0][0]->username;

        if(empty($user)){
            return redirect('/home/login')->with('warning','您还没有登录,请先登录吧!');
        }else{

            $y = DB::table('user')->where('username',"$user")->first();
            if (empty($y)) {
                return redirect('/home/login')->with('warning','您还没有登录,请先登录吧!');
            }

        }
        return $next($request);
    }
}
