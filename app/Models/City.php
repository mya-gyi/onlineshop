<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'id',
        'city_name',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function shops()
    {
        return $this->hasMany(Shop::class);
    }
}

