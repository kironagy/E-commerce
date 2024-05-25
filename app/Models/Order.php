<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $primaryKey = 'basket_id';

    public $table = 'basket';
    protected $fillable = [
        'city',
        'adderss',
        'notes',
        'item_price',
        'basket_orderstatus',
    ];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function promoCode()
    {
        return $this->belongsTo(PromoCode::class);
    }
}
