<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Regional extends Model
{
    protected $guarded = [];

    public function societies()
    {
        return $this->hasMany(Society::class);
    }
}
