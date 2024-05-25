<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteSetting extends Model
{
    public $table = 'website_settings';
    
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'facebook',
        'instagram',
        'twitter',
        'paner_one',
        'paner_two',

    ];
}
