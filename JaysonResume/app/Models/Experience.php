<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'resume_id',
        'title',
        'company',
        'location',
        'start_date',
        'end_date',
        'description',
    ];

    // Inverse relationship
    public function resume()
    {
        return $this->belongsTo(JaysonResume::class, 'resume_id');
    }
}
