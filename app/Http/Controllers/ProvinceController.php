<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB; // Tambahkan ini

class ProvinceController
{
    public function showProvinces()
    {
        $provinces = DB::table('provinces')->get();
        return view('map.province', ['provinces' => $provinces]); 
    }
}
