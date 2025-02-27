<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    public $table = 'website';

    use HasFactory;
    protected $fillable = [
        'img',
        'text'
    ];

}
