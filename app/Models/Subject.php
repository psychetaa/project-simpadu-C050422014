<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'lecturer_id',
        'semester',
        'academic_year',
        'sks',
        
    ];
    public function lecturer()
    {
        return $this->belongsTo(User::class);
    }
}
