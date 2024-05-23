<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Filament\Models\Contracts\HasName;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable implements HasName
{
    use HasFactory;
    protected $casts = ['password' => 'hashed'];
    public function getFilamentName(): string
    {
        return $this->name;
    }
}
