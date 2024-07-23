<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Design extends Model
{
    use HasFactory;

    public $table = 'design';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'img',
    ];

    public function toArray()
    {
        return collect(parent::toArray())->merge([
            'img' => collect($this->img)->map(function ($link) {
                return str_starts_with($link, 'http') ? $link : request()->root().'/allImages/'.$link;
            }),
        ]);
    }
}
