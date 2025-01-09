<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    /** @use HasFactory<\Database\Factories\CountryFactory> */
    use HasFactory;

    public function users()
    {
        $this->hasMany(User::class);
    }

    public function posts()
    {
        $this->hasManyThrough(Post::class, User::class);
    }
}
