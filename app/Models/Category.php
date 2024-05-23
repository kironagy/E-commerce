<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'categories_name',
        'categories_name_ar',
        'categories_img'
    ];

    public function subCategory() {
        return $this->hasMany(subCategory::class, 'subcategories_IdCat');
    }

    public function items()
    {
        return DB::table('items')->where('item_cat', $this->id)->paginate(9);
    }

    public function toArray()
    {
        return collect(parent::toArray())->merge([
            'image' => collect($this->image)->map(function($link){
                return str_starts_with($link, "http") ? $link : request()->root().'/allImages/'.$link;
            }),
        ]);
    }
}
