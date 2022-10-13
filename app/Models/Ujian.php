<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ujian extends Model
{
    protected $fillable = [
        'nama_ujian',
        'materi',
        'mapel_id',
        'kelas_id',
    ];

    public function mapel(){
        return $this->hasOne(Mapel::class, 'id', 'kelas_id');
    }

    public function kelas(){
        return $this->hasOne(Kelas::class, 'id', 'kelas_id');
    }

    public function nilai(){
        return $this->belongsTo(Nilai::class);
    }
}
