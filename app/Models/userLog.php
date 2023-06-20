<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userLog extends Model
{
    public $timestamps = false;

    protected $table = 'userLog';

    protected $fillable = ['username', 'email', 'password'];
}
