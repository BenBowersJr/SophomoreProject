<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    use HasFactory;
    protected $fillable = [
        'f_name',
        'l_name',
        'email',
        'age',
        'phone',
        'password',
        'dob',
        'family_password',
        'ec_name',
        'ec_relation',
        'ec_phone',
        'group',
        'admission_date',
        'balance_due',
        'approved'
    ];
}
