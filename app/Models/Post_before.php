<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [
        [
            'title' => 'SK8 Season 2?!',
            'author' => 'Akasuna Hera',
            'slug' => 'slug-1',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime inventore vero quidem quos distinctio eius vitae ad consequatur sapiente? Praesentium obcaecati velit architecto harum cupiditate rem nulla itaque nobis odio.Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga soluta necessitatibus labore sunt fugiat, optio est blanditiis impedit repellat aliquid libero possimus maiores tempora id repudiandae adipisci cumque accusamus! Debitis at deserunt consectetur nam dolorum blanditiis alias aspernatur commodi magnam quisquam harum, eligendi laborum, delectus a, ratione ea asperiores aliquid fugiat quas perferendis animi voluptatum est nemo! Aliquam veritatis amet totam quibusdam, architecto accusamus autem corrupti! Consequuntur nam porro harum odio laboriosam recusandae a aut aperiam aspernatur, illum similique dignissimos.'
        ],
        [
            'title' => 'Hasegawa Langa Win National Skateboard Competition',
            'author' => 'Akasuna Hera',
            'slug' => 'slug-2',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime inventore vero quidem quos distinctio eius vitae ad consequatur sapiente? Praesentium obcaecati velit architecto harum cupiditate rem nulla itaque nobis odio.Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga soluta necessitatibus labore sunt fugiat, optio est blanditiis impedit repellat aliquid libero possimus maiores tempora id repudiandae adipisci cumque accusamus! Debitis at deserunt consectetur nam dolorum blanditiis alias aspernatur commodi magnam quisquam harum, eligendi laborum, delectus a, ratione ea asperiores aliquid fugiat quas perferendis animi voluptatum est nemo! Aliquam veritatis amet totam quibusdam, architecto accusamus autem corrupti! Consequuntur nam porro harum odio laboriosam recusandae a aut aperiam aspernatur, illum similique dignissimos.'
        ]
    ];

    public static function all()
    {
        // kalo properti biasa pakenya objek kaya gini.
        // return $this->blog_posts;

        // tapi karena statis pakenya self
        // return self::$blog_posts;
        // kita ubah araynya ke collection biar gampang di otak atik
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // ini pake method collection. syaratnya si array harus diubah ke collection dulu
        return $posts->firstWhere('slug', $slug);
    }
}
