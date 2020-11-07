<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        echo '我是首页，我顺便还加载了resources/views/welcome.blade.php';
        return view('welcome');
    }
}
