<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'profile_image',
        'user_id',
        'address_id',
        //  'verified_at'
    ];

    public function staff()
    {
        return $this->hasMany(Staff::class);
    }

    public function address()
    {
        return $this->belongsTo(Address::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function intern()
    {
        return $this->hasMany(Intern::class);
    }
    public function internships()
    {
        return $this->hasMany(Internship::class);
    }
}
