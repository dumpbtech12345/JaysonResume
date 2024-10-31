<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = [
        'resume_id',
        'skill_name',
    ];

    // Inverse relationship
    public function resume()
    {
        return $this->belongsTo(JaysonResume::class, 'resume_id');
    }
}
