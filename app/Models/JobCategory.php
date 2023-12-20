<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobCategory extends Model
{
    protected $table = 'job_categories'; // Define the table name if not standard

    protected $fillable = [
        'job_category' // List all fillable fields
    ];

    // Relationship with JobVacancy
    // public function jobVacancies()
    // {
    //     return $this->hasMany(JobVacancy::class, 'job_category_id');
    // }

    // Add other relationships if necessary
}
