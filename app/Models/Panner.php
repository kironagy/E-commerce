<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panner extends Model
{
    public $table = 'panners';
    
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'panner_one',
        'panner_two',

    ];
}
