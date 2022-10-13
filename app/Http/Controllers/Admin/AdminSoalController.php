<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ujian;
use App\Models\Soal;

class AdminSoalController extends Controller
{
    //Menyimpan tambah data
    public function store(Request $request){
        $request->validate([
            'soal' => 'required',
            'id_ujian' => 'required',
            'pilihana' => 'required',
            'pilihanb' => 'required',
            'pilihanc' => 'required',
            'pilihand' => 'required',
            'kunci' => 'required',
        ]);

        $soal = new Soal;
    	$soal->soal = $request->soal;
    	$soal->id_ujian = $request->id_ujian;
    	$soal->pilihan_1 = $request->pilihana;
    	$soal->pilihan_2 = $request->pilihanb;
    	$soal->pilihan_3 = $request->pilihanc;
    	$soal->pilihan_4 = $request->pilihand;
    	$soal->kunci = $request->kunci;
    	$soal->save();

    	return Redirect::route('admin.soal.show', $request->id_ujian)
          ->with(['message'=>'Data berhasil ditambahkan']);
    }

    //simpan edit data
    public function update(Request $request, Soal $soal){
        $request->validate([
            'soal' => 'required',
            'id_ujian' => 'required',
            'pilihana' => 'required',
            'pilihanb' => 'required',
            'pilihanc' => 'required',
            'pilihand' => 'required',
            'kunci' => 'required',
        ]);
        
    	$soal->update($request->all());

    	return Redirect::route('admin.soal.show', $request->id_ujian)
           ->with(['message'=>'Data berhasil diedit']);
    }
}
