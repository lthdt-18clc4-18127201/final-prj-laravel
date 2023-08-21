<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use MongoDB\BSON\ObjectID;

class Leaderboard extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'Account';
}
