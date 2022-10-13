<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    protected $fillable = [
        'group_user_jwb',
        'user_id',
        'ujian_id',
        'jml_benar',
        'jml_salah',
        'jml_soal',
        'nilai'
    ];

    public function user(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function ujian(){
        return $this->hasOne(Ujian::class, 'id', 'ujian_id');
    }
}
