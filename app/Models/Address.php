<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable =[
        'house_number',
            'city',
            'state',
            'country'
    ];

    public function organization()
    {
        return $this->hasOne(Organization::class);
    }
}
