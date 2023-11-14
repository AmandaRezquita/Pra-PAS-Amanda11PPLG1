<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sma extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'Sekolah',
        'Alamat',
        'Kepala_Sekolah',
        'Jumlah_Siswa',
        'Tanggal_Pendirian',
        'Akreditasi',
    ];
}
