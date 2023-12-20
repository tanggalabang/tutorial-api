<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Validation extends Model
{
    // Define the table if it's not the plural form of model name
    protected $table = 'validations';
    // Specify the fields that are mass assignable
    protected $fillable = [
        'society_id', 'job_category_id', 'work_experience', 'job_position',
        'reason_accepted', 'status', 'validator_notes'
    ];
    public $timestamps = false;

    public function society()
    {
        return $this->belongsTo(Society::class, 'society_id');
    }

    public function jobCategory()
    {
        return $this->belongsTo(JobCategory::class, 'job_category_id');
    }

    public function validator()
    {
        return $this->belongsTo(Validator::class, 'validator_id');
    }
}
