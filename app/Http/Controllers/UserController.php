<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        view('welcome');
    }
    public function  user(){
        view('user');
    }
    public function post(){
        view ('post');
    }
}
