<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    public function index()
    {

        return view('posts', [
            'title' => 'Posts',
            'active' => 'blog',
            // kalo all secara default ambil data secara asc
            // 'posts' => Post::all()
            // pake with terus parameternya nama tabel. jadi ini eager loading.
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(4)->withQueryString(), //ini berdasarkan timestamp
            'categories' => Category::all()

        ]);
    }

    //di parameter function ada method Post supaya kita gausah query cari data berdasarkan id lagi tapi tingga panggil variabel $post. ini namanya route binding.
    public function show(Post $post)
    {
        return view('post', [
            'title' => 'Post',
            'active' => 'blog',
            // before binding
            // 'post' => Post::find($post)
            // after binding
            'post' => $post
        ]);
    }
}
