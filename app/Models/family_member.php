<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class family_member extends Model
{
    use HasFactory;
    protected $fillable = [
        'family_password',
        'f_name',
        'l_name',
        'email',
        'phone',
        'password',
        'dob'
    ];
}
