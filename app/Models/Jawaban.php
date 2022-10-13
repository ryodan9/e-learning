<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    protected $fillable = [
        'group_user_jwb',
        'user_id',
        'ujian_id',
        'soal_id',
        'pilihan',
      ];

      public function soal(){
        return $this->hasOne(Soal::class, 'id', 'soal_id');
      }
}
