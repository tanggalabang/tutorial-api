<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regional extends Model
{
    use HasFactory;

    protected $fillable = [
        'province',
        'district',
        // Tambahkan kolom lainnya sesuai kebutuhan
    ];

    // Relasi dengan tabel societies
    public function societies()
    {
        return $this->hasMany(Society::class);
    }
}
