<?php

namespace App\Http\Controllers;

use App\Models\Jawaban;
use App\Models\Nilai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NilaiController extends Controller
{
    public function index(){
        return view('user.nilai', [
            'data' => Nilai::where('user_id', Auth::user()->id)->get()
        ]);
    }

    public function jawaban($guj){
        return view('user.jawaban', [
            'data' => Jawaban::where('group_user_jwb', $guj)->get()
        ]);
    }
}
