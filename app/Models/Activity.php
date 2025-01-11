<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    public function scopeRecent($query, $limit = 3)
    {
        return $query->orderBy('created_at', 'desc')->take($limit);
    }
}
