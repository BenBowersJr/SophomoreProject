<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class caregiver extends Model
{
    use HasFactory;
    protected $fillable = [
        'employee_id',
        'patient_id',
        'date',
        'morning_med',
        'afternoon_med',
        'night_med',
        'breakfast',
        'lunch',
        'dinner'
    ];
}
