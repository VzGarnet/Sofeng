<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gerbong extends Model
{
    // use HasFactory;

    public $timestamps = false;

    protected $table = 'gerbong';

    protected $fillable = 'occupied';
}
