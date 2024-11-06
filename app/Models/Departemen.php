<?php

namespace App\Models;

use App\Models\Pegawai;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Departemen extends Model
{
    public function pegawai() {
        return $this->hasMany(Pegawai::class);
    }
}
