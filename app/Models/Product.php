<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $table = 'items';
    public $timestamps = false;


    protected $fillable = [
        'item_id',
        'item_cat',
        'item_subcat',
        'item_name',
        'item_desc',
        'item_img',
        'item_price',
        'color',
        'material',
        'size',
        'details',
        'quantity',
        'from_shipping_days',
        'to_shipping_days',
        'shippingPrice',
        'item_discount',
        'item_countView',
        'item_lat',
        'item_long',
        'item_time',
        'cover'
    ];

    protected $casts = [
        'item_img' => 'array',
        'cover' => 'array',
    ];

    public function subCategory(){
        return $this->belongsTo(SubCategory::class, 'item_subcat', 'id');
    }

    public function Category(){
        return $this->belongsTo(Category::class, 'item_cat', 'id');
    }

    // public function toArray()
    // {
    //     return collect(parent::toArray())->merge([
    //         'images' => collect($this->images)->map(function($link){
    //             return str_starts_with($link, "http") ? $link : request()->root().'/allImages/'.$link;
    //         }),
    //         'cover' => collect($this->images)->map(function($link){
    //             return str_starts_with($link, "http") ? $link : request()->root().'/allImages/'.$link;
    //         }),
    //     ]);
    // }

    public function order() {
        return $this->hasMany(Order::class);
    }

    public function cart() {
        return $this->belongsTo(Cart::class);
    }
}
