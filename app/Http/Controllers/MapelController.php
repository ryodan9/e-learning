<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use App\Models\Ujian;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function index($mapel){
        $mapel = Mapel::where('slug', $mapel)->first();
        return view('user.mapel', [
            'title' => $mapel->nama,
            'mapel' => $mapel,
            'data' => Ujian::where('mapel_id', $mapel->id)->get()
        ]);
    }
}
