<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JaysonResume extends Model
{
    use HasFactory;

    protected $table = 'jaysonresumes';

    protected $fillable = [
        'name',
        'address',
        'phone',
        'email',
        'image',
        'objective',
    ];

    // Relationships
    public function experiences()
    {
        return $this->hasMany(Experience::class, 'resume_id');
    }

    public function education()
    {
        return $this->hasMany(Education::class, 'resume_id');
    }

    public function skills()
    {
        return $this->hasMany(Skill::class, 'resume_id');
    }

    public function certifications()
    {
        return $this->hasMany(Certification::class, 'resume_id');
    }

    public function languages()
    {
        return $this->hasMany(Language::class, 'resume_id');
    }

    public function achievement()
    {
        return $this->hasMany(Achievement::class, 'resume_id');
    }

}