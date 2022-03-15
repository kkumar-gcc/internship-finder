<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intern extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }

    public function proposels()
    {
        return $this->hasMany(Proposel::class);
    }
    public function histories()
    {
        return $this->hasMany(History::class);
    }
    // public function internships()
    // {
    //     return $this->belongsToMany(Internship::class);
    // }
}
