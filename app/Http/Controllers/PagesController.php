<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redis;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
      public function root()
    {
        Redis::set('name', 'Taylor');
        $name=Redis::get('name');
        print_r($name);
        return view('pages.root',['name'=>$name]);
    }
    public function permissionDenied(){
        // 如果当前用户有权限访问后台，直接跳转访问
        if (config('administrator.permission')()) {
            return redirect(url(config('administrator.uri')), 302);
        }
        // 否则使用视图
        return view('pages.permission_denied');
    }
}
