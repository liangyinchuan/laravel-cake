<?php

namespace App\Http\Middleware;

use Closure;

use DB;

class AdminMiddleware
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
        $id = $request ->session() ->get('adminuser.id');
        if (!empty($id)) {

            $limits = DB::table('user')->where('id',$id)->first()->limits;
            // dd($limits);
            if ($limits==2) {
                return $next($request);
            }else{
                return redirect('admin/login')->with('msg','您没有权限登录后台管理界面!');
            }


        }else{
            return redirect('admin/login')->with('msg','请登录后再进行操作!');
        }
    }
}
