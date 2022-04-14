<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class AdminController extends Controller
{
    public function index(){
        //return view('admin.home.index');

        return '<h2 style="color:white; background-color:blue; font-wight:bold; width:25%;">Rotas para caminhos admin</h2>';
    }
}

