<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrainingInquiry extends Model
{
    protected $fillable = [
        'email',
        'phone',
        'service_interest',
        'language',
        'status',
        'notes'
    ];
}
