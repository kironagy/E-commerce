<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;
    protected $primaryKey = 'favorite_id';
    public $table = 'favorite';
    public $fillable = ['favorite_userid','favorite_itemid','favorite_time'];
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class, 'favorite_userid', 'id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'favorite_itemid', 'id');
    }
}
