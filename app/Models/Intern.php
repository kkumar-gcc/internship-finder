<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intern extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(user::class);
    }

    public function organization()
    {
        return $this->belongsTo(organization::class);
    }
}
