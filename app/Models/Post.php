<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'ID', 'title', 'content',
    ];

    // Define relationships here if needed

    // Example accessor for post title
    public function getTitleAttribute($value)
    {
        return ucfirst($value); // Make the first letter uppercase
    }
}
