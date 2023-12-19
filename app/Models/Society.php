<?php

// app/Models/Society.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Society extends Model
{
    protected $table = 'societies';

    protected $fillable = [
        'name',
        'born_date',
        'gender',
        'address',
        'id_card_number',
        'password', // Assuming you have a hashed password in your table
        'regional_id',
        'login_tokens',
    ];
    public $timestamps = false;


    // Relationship with the Regional model assuming you have a 'regional' table
    public function regional()
    {
        return $this->belongsTo(Regional::class, 'regional_id', 'id');
    }
}
