<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function store(Request $request)
    {
        //フォームからの値をDBに保存する操作
        
        //フラッシュデータとリダイレクト
        return redirect()->route('index')->with('success', 'Store Success!!!');
    }
}
