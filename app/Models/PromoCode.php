<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromoCode extends Model
{
    use HasFactory;
    protected $fillable =
    [ 
        'code',
        'discount'
    ];
    public function order() {
        return $this->hasMany(Order::class);
    }
}
