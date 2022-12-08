<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index() {
        // $nums =  [];
        $data = [
            'profiles' => [
                ['name'=>'山田太郎', 'mail'=>'taro@gmail.com'],
                ['name'=>'山田aaa', 'mail'=>'taro@gmail.com'],
                ['name'=>'山田bbb', 'mail'=>'taro@gmail.com']
            ]

        ];

        return view('hello.index', $data);
    }

    public function post(Request $request)
    {
        $msg = $request->msg;
        $data = [
            'msg'=>$msg
        ];
        return view('hello.index', $data);

    }
}
