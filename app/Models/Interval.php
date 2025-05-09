<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interval extends Model
{
    use HasFactory;

    protected $table = 'intervals';

    public $timestamps = false;

    protected $fillable = [
        'start',
        'end',
    ];
}
