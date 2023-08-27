<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Laravel\Sanctum\HasApiTokens;
use Jenssegers\Mongodb\Eloquent\Model;
class Post extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'Post';
    protected $fillable = [
        'ID', 'Content', 'Upvotes', 'View'
    ];

    // Define relationships here if needed

    // Example accessor for post title
    public function getTitleAttribute($value)
    {
        return ucfirst($value); // Make the first letter uppercase
    }
}
