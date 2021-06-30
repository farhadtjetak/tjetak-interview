<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;

class ShowHomePage extends BaseController
{
    public function index(){
        return view('index');
    }
}
