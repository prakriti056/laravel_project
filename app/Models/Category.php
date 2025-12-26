<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    // If you have relations, e.g. job types:
    public function jobTypes()
    {
        return $this->hasMany(JobType::class);
    }
}
