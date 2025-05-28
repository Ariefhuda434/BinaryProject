<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FeedbackController extends Controller
{
     public function create(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login')
                ->with('error', 'Anda harus login terlebih dahulu untuk mengirim feedback');
        }

        $validatedData = $request->validate([
            'feedback' => 'required|integer|min:1|max:5',
        ]);

        $todayFeedback = Feedback::where('id_user', Auth::id())
       ->whereDate('created_at', now()->toDateString())
        ->first();

        if ($todayFeedback) {
        return back()->with('error', 'Anda sudah memberikan feedback hari ini. Terima kasih!');
        }
        Feedback::create([
            'id_user' => Auth::id(),
            'feedback' => $validatedData['feedback'],
        ]);

        return back()->with('success', 'Feedback berhasil dikirim!');
    }
    
}
