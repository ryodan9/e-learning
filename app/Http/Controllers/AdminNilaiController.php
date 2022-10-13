<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use Illuminate\Http\Request;

class AdminNilaiController extends Controller
{
    public function index(){
        return view('admin.nilai', [
            'data' => Nilai::all()
        ]);
    }

    public function destroy($id){
        Nilai::destroy($id);
        return redirect()->to('admin/nilai');
    }
}
