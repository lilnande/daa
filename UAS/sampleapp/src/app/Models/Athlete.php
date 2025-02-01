<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Athlete extends Model
{
    use HasFactory;

    // Relasi dengan model Pelatihan
    public function pelatihan()
    {
        return $this->belongsToMany(Pelatihan::class, 'kehadiran', 'id_atlet', 'id_pelatihan');
    }

    // Relasi dengan model Evaluasi
    public function evaluasi()
    {
        return $this->hasMany(Evaluasi::class, 'id_atlet');
    }

    // Relasi dengan model Keuangan
    public function keuangan()
    {
        return $this->hasOne(Keuangan::class, 'id_atlet');
    }
}
