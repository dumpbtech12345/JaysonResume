<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $fillable = [
        'resume_id',
        'degree',
        'institution',
        'start_date',
        'end_date',
    ];

    // Inverse relationship
    public function resume()
    {
        return $this->belongsTo(JaysonResume::class, 'resume_id');
    }
}
