<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\User;
use App\Models\Mitra;
use App\Models\Report;
use App\Models\Gerakan;

class CountController extends Controller
{
    public function index()
    {
        return view('beranda', [
            'jumlahmitra' => Mitra::count(),
            'jumlahuser' => User::count(),
            'jumlahlaporan' => Report::count(),
            'jumlahgerakan' => Gerakan::where('status','selesai')->count(),
            'jumlahfeedback' => Feedback::where('feedback', 5)->count(),
        ]);
    }
}
