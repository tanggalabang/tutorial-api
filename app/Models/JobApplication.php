<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    protected $table = 'job_applications'; // Set the table name

    protected $fillable = [
        'society_id', 'job_vacancy_id', 'position_id', 'status', 'notes'
        // Add other fields as needed
    ];

    // Define the relationship with Society
    public function society()
    {
        return $this->belongsTo(Society::class, 'society_id');
    }

    // Define the relationship with JobVacancy
    public function jobVacancy()
    {
        return $this->belongsTo(JobVacancy::class, 'job_vacancy_id');
    }

    // Define the relationship with AvailablePosition (if applicable)
    public function availablePosition()
    {
        return $this->belongsTo(AvailablePosition::class, 'position_id');
    }

    // Add any other relationships or custom methods as needed
}
