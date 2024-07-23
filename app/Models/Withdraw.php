<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdraw extends Model
{
    public $table = 'withdraw';

    use HasFactory;

    protected $fillable = ['user_id', 'amount', 'methods'];
}
