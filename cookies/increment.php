<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Cookie;


class increment extends Controller
{
    public function index(Request $req){

        $cookie = $req->cookie('new_cookie');

        return view('index_page', compact('cookie'));
    }

    public function inc(Request $req){
        $cookie = $req->cookie('new_cookie', 0);

        $cookie++;

        Cookie::queue('new_cookie', $cookie, 60);

        return redirect('/index');
    }
}
