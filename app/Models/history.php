<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class history extends Model
{
    // use HasFactory;

    public $timestamps = false;

    protected $table = 'history';

    protected $fillable = ['userID', 'argoID', 'gerbongID', 'kursiNo', 'titel', 'namalengkap', 'telepon', 'email', 'NIK'];
}
