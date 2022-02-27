<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;

    protected $fillable =[
        'organization_name',
        'organization_phone',
         'user_id',
         'address_id',
        //  'verified_at'
     ];
}
