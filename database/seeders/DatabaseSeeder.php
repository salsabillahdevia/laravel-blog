<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // sintax nya NamaClass::method
        User::create([
            'name'  => 'Akasuna Hera',
            'username'  => 'akasunahera',
            'email' => 'akasuna@gmail.com',
            'password' => bcrypt('123')
        ]);
        User::create([
            'name'  => 'Hasegawa Langa',
            'username'  => 'hasegawalanga',
            'email' => 'langa@gmail.com',
            'password' => bcrypt('123')
        ]);
        User::create([
            'name'  => 'Kyan Reki',
            'username'  => 'kyanreki',
            'email' => 'reki@gmail.com',
            'password' => bcrypt('123')
        ]);
        // faker untuk generate data user
        User::factory(3)->create();

        Category::create([
            'name' => 'Sport',
            'slug' => 'sport'
        ]);
        Category::create([
            'name' => 'Life Style',
            'slug' => 'life-style'
        ]);
        Category::create([
            'name' => 'Education',
            'slug' => 'education'
        ]);
        Category::create([
            'name' => 'Social Event',
            'slug' => 'social-event'
        ]);
        Category::create([
            'name' => 'Health',
            'slug' => 'health'
        ]);
        Category::create([
            'name' => 'Art',
            'slug' => 'art'
        ]);


        Post::create([
            'title' => 'SK8 Season 2?!',
            'slug' => 'sk8-season-2',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime inventore vero quidem quos distinctio eius vitae ad consequatur sapiente? Praesentium obcaecati velit architecto harum cupiditate rem nulla itaque nobis odio.Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime inventore vero quidem quos distinctio eius vitae ad consequatur sapiente? Praesentium obcaecati velit architecto harum cupiditate rem nulla itaque nobis odio.Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga soluta necessitatibus labore sunt fugiat, optio est blanditiis impedit repellat aliquid libero possimus maiores tempora id repudiandae adipisci cumque accusamus! Debitis at deserunt consectetur nam dolorum blanditiis alias aspernatur commodi magnam quisquam harum, eligendi laborum, delectus a, ratione ea asperiores aliquid fugiat quas perferendis animi voluptatum est nemo! Aliquam veritatis amet totam quibusdam, architecto accusamus autem corrupti! Consequuntur nam porro harum odio laboriosam recusandae a aut aperiam aspernatur, illum similique dignissimos.',
            'category_id' => 4,
            'user_id' => 1
        ]);
        Post::create([
            'title' => 'Hasegawa Langa Win National Skateboard Competition',
            'slug' => 'hasegawa-langa-win-national-skateboard-competition',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime inventore vero quidem quos distinctio eius vitae ad consequatur sapiente? Praesentium obcaecati velit architecto harum cupiditate rem nulla itaque nobis odio.Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime inventore vero quidem quos distinctio eius vitae ad consequatur sapiente? Praesentium obcaecati velit architecto harum cupiditate rem nulla itaque nobis odio.Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga soluta necessitatibus labore sunt fugiat, optio est blanditiis impedit repellat aliquid libero possimus maiores tempora id repudiandae adipisci cumque accusamus! Debitis at deserunt consectetur nam dolorum blanditiis alias aspernatur commodi magnam quisquam harum, eligendi laborum, delectus a, ratione ea asperiores aliquid fugiat quas perferendis animi voluptatum est nemo! Aliquam veritatis amet totam quibusdam, architecto accusamus autem corrupti! Consequuntur nam porro harum odio laboriosam recusandae a aut aperiam aspernatur, illum similique dignissimos.',
            'category_id' => 1,
            'user_id' => 1
        ]);
        Post::create([
            'title' => 'Skater Nanjo Kojiro and Sakurayashiki Kaoru are dating??',
            'slug' => 'skater-nanjo-kojiro-and-sakurayashiki-kaoru-are-dating',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime inventore vero quidem quos distinctio eius vitae ad consequatur sapiente? Praesentium obcaecati velit architecto harum cupiditate rem nulla itaque nobis odio.Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime inventore vero quidem quos distinctio eius vitae ad consequatur sapiente? Praesentium obcaecati velit architecto harum cupiditate rem nulla itaque nobis odio.Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga soluta necessitatibus labore sunt fugiat, optio est blanditiis impedit repellat aliquid libero possimus maiores tempora id repudiandae adipisci cumque accusamus! Debitis at deserunt consectetur nam dolorum blanditiis alias aspernatur commodi magnam quisquam harum, eligendi laborum, delectus a, ratione ea asperiores aliquid fugiat quas perferendis animi voluptatum est nemo! Aliquam veritatis amet totam quibusdam, architecto accusamus autem corrupti! Consequuntur nam porro harum odio laboriosam recusandae a aut aperiam aspernatur, illum similique dignissimos.',
            'category_id' => 2,
            'user_id' => 3
        ]);
        Post::create([
            'title' => 'Kyan Reki And His "Mysterious" BF',
            'slug' => 'kyan-reki-and-his-mysterious-bf',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime inventore vero quidem quos distinctio eius vitae ad consequatur sapiente? Praesentium obcaecati velit architecto harum cupiditate rem nulla itaque nobis odio.Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime inventore vero quidem quos distinctio eius vitae ad consequatur sapiente? Praesentium obcaecati velit architecto harum cupiditate rem nulla itaque nobis odio.Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga soluta necessitatibus labore sunt fugiat, optio est blanditiis impedit repellat aliquid libero possimus maiores tempora id repudiandae adipisci cumque accusamus! Debitis at deserunt consectetur nam dolorum blanditiis alias aspernatur commodi magnam quisquam harum, eligendi laborum, delectus a, ratione ea asperiores aliquid fugiat quas perferendis animi voluptatum est nemo! Aliquam veritatis amet totam quibusdam, architecto accusamus autem corrupti! Consequuntur nam porro harum odio laboriosam recusandae a aut aperiam aspernatur, illum similique dignissimos.',
            'category_id' => 2,
            'user_id' => 1
        ]);
        Post::create([
            'title' => 'How To Make Healty Food With Chef Nanjo Kojiro',
            'slug' => 'how-to-make-healty-food-with-chef-nanjo-kojiro',
            'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur quo ducimus aut omnis soluta, in consectetur fugit molestias ipsam harum possimus corrupti et voluptates error quos eos minus?',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, voluptatum doloribus id suscipit repellendus optio quas quod non explicabo facere! Placeat, quisquam vitae nam atque, vero odit nihil, dicta eaque minima numquam facere. Quas accusantium quidem voluptates eius saepe! Aliquid, a accusantium autem placeat minima incidunt qui voluptatibus repudiandae et cum in quae nisi non nemo ratione dolore cupiditate modi facere. Nobis corporis adipisci ex atque quidem nihil in, fuga officia nulla vel corrupti debitis impedit cumque, tenetur ipsam ducimus totam ut a repellendus minima. Ea, pariatur hic a, distinctio est minima non perferendis quos itaque ipsum qui dolor vitae!',
            'category_id' => 5,
            'user_id' => 3
        ]);
        Post::create([
            'title' => 'Japan Caligraphy Artist Sakurayashiki Kaoru',
            'slug' => 'japan-caligraphy-artist-sakurayashiki-kaoru',
            'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur quo ducimus aut omnis soluta, in consectetur fugit molestias ipsam harum possimus corrupti et voluptates error quos eos minus?',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, voluptatum doloribus id suscipit repellendus optio quas quod non explicabo facere! Placeat, quisquam vitae nam atque, vero odit nihil, dicta eaque minima numquam facere. Quas accusantium quidem voluptates eius saepe! Aliquid, a accusantium autem placeat minima incidunt qui voluptatibus repudiandae et cum in quae nisi non nemo ratione dolore cupiditate modi facere. Nobis corporis adipisci ex atque quidem nihil in, fuga officia nulla vel corrupti debitis impedit cumque, tenetur ipsam ducimus totam ut a repellendus minima. Ea, pariatur hic a, distinctio est minima non perferendis quos itaque ipsum qui dolor vitae!',
            'category_id' => 6,
            'user_id' => 3
        ]);
        Post::create([
            'title' => 'Kyan Reki Win Skateboard Art Design Competition',
            'slug' => 'kyan-reki-win-skateboard-art-design-competition',
            'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur quo ducimus aut omnis soluta, in consectetur fugit molestias ipsam harum possimus corrupti et voluptates error quos eos minus?',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, voluptatum doloribus id suscipit repellendus optio quas quod non explicabo facere! Placeat, quisquam vitae nam atque, vero odit nihil, dicta eaque minima numquam facere. Quas accusantium quidem voluptates eius saepe! Aliquid, a accusantium autem placeat minima incidunt qui voluptatibus repudiandae et cum in quae nisi non nemo ratione dolore cupiditate modi facere. Nobis corporis adipisci ex atque quidem nihil in, fuga officia nulla vel corrupti debitis impedit cumque, tenetur ipsam ducimus totam ut a repellendus minima. Ea, pariatur hic a, distinctio est minima non perferendis quos itaque ipsum qui dolor vitae!',
            'category_id' => 6,
            'user_id' => 2
        ]);

        Post::factory(10)->create();
    }
}
