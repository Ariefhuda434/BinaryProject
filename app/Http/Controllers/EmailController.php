<?php

namespace App\Http\Controllers;

use App\Mail\BinaryMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
       public function sendEmail(Request $request)
    {
        $user = User::find($request->email);  
        if ($user) {
            Mail::to($user->email)->send(new BinaryMail($user));

            return response()->json(['message' => 'Email telah dikirim ke ' . $user->email]);
        }

        return response()->json(['message' => 'User tidak ditemukan'], 404);
    }
}
