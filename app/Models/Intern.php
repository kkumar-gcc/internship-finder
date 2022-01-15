<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Intern extends Model
{
    use HasFactory,Searchable;

    
   
    protected $fillable =[
        'first_name',
        'last_name',
        'other_name',
        'gender',
        'phone',
        'date_of_birth'
    ];

}
