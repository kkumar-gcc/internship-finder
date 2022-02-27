<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intern extends Model
{
    use HasFactory;

    protected $fillable =[
        'full_name',
        'last_name',
        'other_name',
        'user_id',
        'gender',
        'phone',
        'date_of_birth',

        // 'verified_at',
        'address_id'
    ];
}
