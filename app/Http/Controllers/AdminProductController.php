<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    //
    public function index(){
        return view ('admin.login');
    }
    public function indexs(){
        return view ('admin.insertProduct');
    }
    public function indexq(){
        return view ('admin.insertCustomers');
    }
}
