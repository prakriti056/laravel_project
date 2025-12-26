<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    // Relationship: each Job belongs to a JobType
    public function jobType()
    {
        return $this->belongsTo(JobType::class);
    }

    // Relationship: each Job belongs to a Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function applications() {
        return $this->hasMany(JobApplication::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
