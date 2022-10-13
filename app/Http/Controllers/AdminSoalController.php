<?php

namespace App\Http\Controllers;

use App\Models\Soal;
use Illuminate\Http\Request;

class AdminSoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        return view('admin.soal', [
            'id' => $id,
            'data' => Soal::where('ujian_id', $id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('admin.soal_create', [
            'id' => $id
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Soal::create($request->all());
        return redirect()->to('admin/soal/' . $request->ujian_id);
        // $soal = new Soal();
        // $soal->ujian_id = $request->ujian_id;
        // $soal->soal = $request->soal;
        // $soal->pilihana = $request->pilihana;
        // $soal->pilihanb = $request->pilihanb;
        // $soal->pilihanc = $request->pilihanc;
        // $soal->pilihand = $request->pilihand;
        // $soal->kunci = $request->kunci;
        // $soal->save();
        // return redirect()->to('admin/soal/' . $request->ujian_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Soal  $soal
     * @return \Illuminate\Http\Response
     */
    public function show(Soal $soal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Soal  $soal
     * @return \Illuminate\Http\Response
     */
    public function edit($ujian_id, $id)
    {
        return view('admin.soal_edit', [
            'data' => Soal::where([['id', $id], ['ujian_id', $ujian_id]])->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Soal  $soal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Soal::where([['id', $id], ['ujian_id', $request->ujian_id]])->update($request->except('_token'));
        return redirect()->to('admin/soal/' . $request->ujian_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Soal  $soal
     * @return \Illuminate\Http\Response
     */
    public function destroy($ujian_id, $id)
    {
        Soal::destroy($id);
        return redirect()->to('admin/soal/' . $ujian_id);
    }

    public function gen(){
        for($i = 0; $i < 60; $i++){
            $ra = ['a', 'b', 'c', 'd'];
            $data = [
                'ujian_id' => '3',
                'soal' => $this->getRandom(),
                'pilihana' => $this->getRandom(),
                'pilihanb' => $this->getRandom(),
                'pilihanc' => $this->getRandom(),
                'pilihand' => $this->getRandom(),
                'kunci' => $ra[array_rand($ra)]
            ];

            Soal::create($data);
        }
    }

    function getRandom() { 

        $characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"; 
    
        $randomString = ""; 
    
        for ($i = 0; $i < 10; $i++) { 
    
            $index = rand(0, (strlen($characters) - 1) ); 
    
            $randomString .= $characters[$index]; 
    
        } 
        return $randomString;     
    } 
}
