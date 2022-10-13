<?php

namespace App\Http\Controllers;

use App\Models\Jawaban;
use App\Models\Mapel;
use App\Models\Nilai;
use App\Models\Soal;
use App\Models\Ujian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UjianController extends Controller
{
    public function index($mapel, $id)
    {
        $mapel = Mapel::where('slug', $mapel)->first();
        $ujian = Ujian::where([['mapel_id', $mapel->id], ['id', $id]])->first();
        $soal = Soal::where('ujian_id', $ujian->id)->inRandomOrder()->limit(50)->get();
        return view('user.ujian', [
            'title' => 'Ujian ' . $ujian->nama_ujian . ' - Mapel ' . $mapel->nama .  ' - Kelas ' . $ujian->kelas->nama,
            'mapel' => $mapel,
            'ujian' => $ujian,
            'soal' => count($soal),
            'data' => $soal
        ]);
    }

    public function save(Request $req, $mapel, $ujian_id)
    {
        $nilai_per_soal = 100 / $req->soal;
        $mapels = Mapel::where('slug', $mapel)->first();
        $ujian = Ujian::where([['mapel_id', $mapels->id], ['id', $ujian_id]])->first();

        $group_user_jwb = "guj-" . time();

        $benar = 0;
        $salah = 0;

        $data_jawab = [];
        foreach ($req->jwb as $id => $jwb) {
            array_push($data_jawab, [
                'group_user_jwb' => $group_user_jwb,
                'user_id' => Auth::user()->id,
                'ujian_id' => $ujian_id,
                'soal_id' => $id,
                'pilihan' => ($jwb == null ? "" : $jwb)
            ]);
            if ($jwb != null) {
                if (Soal::where([['ujian_id', $ujian->id], ['id', $id], ['kunci', $jwb]])->first() != null) {
                    $benar += 1;
                } else {
                    $salah += 1;
                }
            }
        }


        $data = [
            'group_user_jwb' => $group_user_jwb,
            'user_id' => Auth::user()->id,
            'ujian_id' => $ujian_id,
            'jml_benar' => $benar,
            'jml_salah' => $salah,
            'jml_soal' => $req->soal,
            'nilai' => ($benar * $nilai_per_soal)
        ];

        Nilai::create($data);
        Jawaban::insert($data_jawab);
        return redirect()->to('user/mapel/' . $mapel)->with('msg_nilai', json_encode(array_merge($data, ['jml_kosong' => ($req->soal - ($benar+$salah) )])) );
    }

}
