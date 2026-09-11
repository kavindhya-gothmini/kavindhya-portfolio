<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable = [
        'job_title',
        'company',
        'location',
        'start_date',
        'end_date',
        'is_current',
        'summary',
        'responsibilities',
        'company_logo',
        'sort_order',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'is_current' => 'boolean',
    ];
}