<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientsDesign extends Model
{
    use HasFactory;
    public $table = 'custom_design';
    public $timestamps = false;
    
    protected $fillable = [
        'user_id',
        'image',
    ];
    public function user() {
        return $this->belongsTo(User::class);
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
