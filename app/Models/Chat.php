<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Chat extends Eloquent
{
    protected $connection = 'mongodb';
    protected $guarded = [];
    use HasFactory;
}
