<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',
        'title',
        'image',
        'type',
        'description',
        'over_view',
        'seniority_level',
        'industry',
        'employment_type',
        'job_functions'

    ];
}
