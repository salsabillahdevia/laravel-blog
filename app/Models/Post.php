<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //ini buat ngasih tau field mana aja yang boleh diisi supaya bisa pake method create. kebalikan dari $fillable itu $guarded buat ngasih tau field yang gaboleh diisi
    protected $fillable = ['title', 'excerpt', 'body', 'thumbnail'];
    protected $with = ['category', 'author'];


    public function scopeFilter($query, array $filters)
    {
        // ini cara biasa
        // if (isset($filters['search']) ? $filters['search'] : false) {
        //     return $query->where('title', 'like', '%' . $filters['search'] . '%')
        //         ->orwhere('body', 'like', '%' . $filters['search'] . '%');
        // }

        // ini pake cara collection method when() dari laravel dan sintaks null coalescing dari php pengganti isset
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
                ->orwhere('body', 'like', '%' . $search . '%');
        });

        // versi pake sintaks callback
        $query->when($filters['category'] ?? false, function ($query, $category) {
            return $query->whereHas('category', function ($query) use ($category) { //pake use() soalnya kalo $category disimpen di samping $query ga bakal kebaca $category yg diatasnya.
                $query->where('name', $category);
            });
        });

        // nyoba pake sintaks arrow function
        $query->when($filters['author'] ?? false, fn ($query, $author) =>
        $query->whereHas('author', fn ($query) =>
        $query->where('name', $author)));
    }

    public function category()
    {
        // ini nunjukin relationship antara model post sama category. disini relationshipnya belongsTo yang artinya 1 postingan untuk satu kategori (one to one).
        return $this->belongsTo(Category::class);
    }

    // ini ganti soalnya kan tabel user itu untuk menunjukkan author.
    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }

    // kasih parameter user_id buat ngasih tau ke laravel kalo method author itu ambil dari tabel user. soalnya kalo ga dikasih parameter lagi nanti laravel nyari tabel namanya author, kan gaada
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
