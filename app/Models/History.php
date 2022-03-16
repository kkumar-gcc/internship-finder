<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'owner',
        'user_id',
        'proposel_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function proposel()
    {
        return $this->belongsTo(Internship::class);
    }
}
