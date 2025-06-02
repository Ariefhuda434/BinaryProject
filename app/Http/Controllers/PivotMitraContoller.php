<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use App\Models\Gerakan;
use App\Models\PivotMitra;
use Illuminate\Http\Request;

class PivotMitraContoller extends Controller
{
    public function pivotMitra(Request $request, Gerakan $gerakan){
   PivotMitra::create([
        'id_mitra' => Mitra::id(),
        'id_gerakan' => $gerakan->id,
    ]);

    return redirect()->route('pivot.mitra', ['gerakan' => $gerakan->slug]);
} 

}
