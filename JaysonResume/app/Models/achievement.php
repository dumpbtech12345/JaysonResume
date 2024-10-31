<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    use HasFactory;

    protected $table = 'achievement'; 

    protected $fillable = [
        'resume_id',
        'achievements_title',
       
    ];

    // Inverse relationship
    public function resume()
    {
        return $this->belongsTo(JaysonResume::class, 'resume_id');
    }
}
