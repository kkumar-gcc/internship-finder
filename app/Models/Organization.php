<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;

    protected $fillable = [
        'organization_name',
        'organization_phone',
        'user_id',
        'address_id',
        //  'verified_at'
    ];

    public function staff()
    {
        return $this->hasMany(staff::class);
    }

    public function user()
    {
        return $this->belongsTo(user::class);
    }

    public function intern()
    {
        return $this->hasMany(intern::class);
    }
}
