<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Society extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function regional()
    {
        return $this->belongsTo(Regional::class);
    }
}
