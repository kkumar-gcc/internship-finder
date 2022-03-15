<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'email',
        'phoneNumber',
        'category',
        'internship_type',
        'designation',
        'salary',
        'qualification',
        'skills',
        'lastdate',
        'location',
        'city',
        'zipcode',
        'organization_id'
    ];


    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }

    // public function interns()
    // {
    //     return $this->belongsToMany(Intern::class);
    // }
    public function proposels()
    {
        return $this->hasMany(Proposel::class);
    }
}
