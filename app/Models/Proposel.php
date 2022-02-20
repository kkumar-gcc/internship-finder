<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
class Proposel extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'reason',
        'available_time'
    ];
    public function internship()
    {
        return $this->belongsTo(Internship::class);
    }

    public function intern()
    {
        return $this->belongsTo(Intern::class);
    }
}
