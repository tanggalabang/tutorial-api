<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobVacancy extends Model
{
    protected $table = 'job_vacancies'; // Define the table name if not standard

    protected $fillable = [
        'job_category_id', 'company', 'address', 'description' // List all fillable fields
    ];

    // Relationship with JobCategory
    public function jobCategory()
    {
        return $this->belongsTo(JobCategory::class, 'job_category_id');
    }

    // Relationship with AvailablePosition
    public function availablePositions()
    {
        return $this->hasMany(AvailablePosition::class, 'job_vacancy_id');
    }

    // Add other relationships if necessary
}
