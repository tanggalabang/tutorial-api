<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Validator extends Model
{
    protected $table = 'validators'; // Define the table name if not standard

    protected $fillable = [
        'user_id', 'role', 'name' // List all fillable fields
    ];

    // Relationship with User (if a Validator is associated with a User)
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relationship with Validation
    public function validations()
    {
        return $this->hasMany(Validation::class, 'validator_id');
    }

    // Add other relationships if necessary
}
