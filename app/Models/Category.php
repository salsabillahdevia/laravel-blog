<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // defining field yang gaboleh di isi pake create
    protected $guarded = ['category_id'];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
