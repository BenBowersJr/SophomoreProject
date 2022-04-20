<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class roster extends Model
{
    use HasFactory;
    protected $fillable = [
        'date',
        'supervisor',
        'doctor',
        'caregiver1',
        'caregiver2',
        'caregiver3',
        'caregiver4',
        'supervisorID',
        'doctorID',
        'caregiver1ID',
        'caregiver2ID',
        'caregiver3ID',
        'caregiver4ID'
    ];
}
