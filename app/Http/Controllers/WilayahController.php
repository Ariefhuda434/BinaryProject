<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\District;
use App\Models\Village;

class WilayahController extends Controller
{
    public function getCities($province_id)
    {
        return response()->json(City::where('province_id', $province_id)->get());
    }

    public function getDistricts($city_id)
    {
        return response()->json(District::where('city_id', $city_id)->get());
    }

    public function getVillages($district_id)
    {
        return response()->json(Village::where('district_id', $district_id)->get());
    }
}
