<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AvailablePosition extends Model
{
    protected $table = 'available_positions'; // Define the table name

    protected $fillable = [
        'job_vacancy_id', 'position', 'capacity', 'apply_capacity' // List all fillable fields
    ];

    // Relationship with JobVacancy
    public function jobVacancy()
    {
        return $this->belongsTo(JobVacancy::class, 'job_vacancy_id');
    }

    // You can add other relationships or methods if needed
}
