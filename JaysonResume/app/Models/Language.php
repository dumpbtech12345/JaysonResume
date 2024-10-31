<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;

    protected $fillable = [
        'resume_id',
        'language',
        'proficiency',
    ];

    // Inverse relationship
    public function resume()
    {
        return $this->belongsTo(JaysonResume::class, 'resume_id');
    }
}
