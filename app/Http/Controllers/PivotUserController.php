<?php

namespace App\Http\Controllers;

use App\Models\Gerakan;
use App\Models\PivotUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PivotUserController extends Controller
{
   public function pivotuser(Request $request, Gerakan $gerakan){
   PivotUser::create([
        'id_user' => Auth::id(),
        'id_gerakan' => $gerakan->id,
    ]);

    return redirect()->route('pivot.user', ['gerakan' => $gerakan->slug]);
} 

}
