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
}
