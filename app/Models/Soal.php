<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    protected $fillable = [
        'ujian_id',
        'soal',
        'pilihana',
        'pilihanb',
        'pilihanc',
        'pilihand',
        'kunci',
    ];

    public function jawaban(){
        return $this->belongsTo(Jawaban::class);
    }
}
