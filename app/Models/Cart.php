<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $primaryKey = 'basket_id';

    public $table = 'basket';
    public $timestamps = false;

    use HasFactory;
    protected $fillable = [
        'basket_id',
        'basket_itemid',
        'basket_quantity',
        'basket_orderstatus',
        'Ticket',
        'address',
        'buildNum',
        'notes',
        'basket_time'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
    
    public function product() {
        return $this->belongsTo(Product::class,'basket_itemid');
    }
}
