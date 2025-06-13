<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\VerifyEMail;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $user = User::where('email', $request->email)->first(); 

        if ($user) {
            Mail::to($user->email)->send(new VerifyEMail($user));
            return response()->json(['message' => 'Email telah dikirim ke ' . $user->email]);
        }

        return response()->json(['message' => 'User tidak ditemukan'], 404);
    }
}
