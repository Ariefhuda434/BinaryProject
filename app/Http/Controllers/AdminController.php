<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index(){
        echo "hello selamat datang";
        echo "<a href='logout' >Logout</a>";
    }
}
