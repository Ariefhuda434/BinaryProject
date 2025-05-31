<?php

namespace App\Http\Controllers;

use App\Models\Feedback;


class BerandaController extends Controller
{
     public function index(){
        return view('admin.index');
    }

    public function feedback(){
        $feedbackBaik = feedback::where('feedback', 5)->count();

        return view ('beranda', compact ('feedbackBaik'));
    }

}