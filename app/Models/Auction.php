<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auction extends Model
{
    use HasFactory;

    public $table = 'auctionsitem';
    public $timestamps = false;
    protected $fillable = [
        'startPrice',
        'Barnd',
        'sience', 
        'country',
        'owned',
        'img',
        'TimeEnd',
    ];
    public function toArray()
    {
        return collect(parent::toArray())->merge([
            'img' => collect($this->img)->map(function($link){
                return str_starts_with($link, "http") ? $link : request()->root().'/allImages/'.$link;
            }),
        ]);
    }
}
