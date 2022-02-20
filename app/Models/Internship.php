<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{
    use HasFactory;
    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }


    public function proposels()
    {
        return $this->hasMany(Proposel::class);
    }
}
