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

        User::create([
            'name' => 'Diki Agustian',
            'username' => 'agandik',
            'email' => 'dikiagustiann@gmail.com',
            'password' => bcrypt('123456')
        ]);
        
        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        

        // User::create([
        //     'name' => 'Agandik',
        //     'email' => 'agandik@gmail.com',
        //     'password' => bcrypt('123456')
        // ]);


        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'ipsum dolor sit amet consectetur adipisicing elit. Suscipit molestiae repellat alias, delectus omnis architecto? Assumenda voluptatem facere odio ducimus perferendis incidunt ut.',
        //     'body' => '<p> ipsum dolor sit amet consectetur adipisicing elit. Suscipit molestiae repellat alias, delectus omnis architecto? Assumenda voluptatem facere odio ducimus perferendis incidunt ut. <p></p> Et omnis commodi ipsum, aliquam quibusdam ea placeat id sapiente nostrum, modi eligendi assumenda quas? Repellendus omnis dolores earum facilis excepturi labore ullam reprehenderit voluptas, velit libero, unde perspiciatis ducimus.  Eius ex quia, cumque hic blanditiis accusamus, est optio perferendis reprehenderit tempora rerum quod fugit quaerat! Voluptas soluta aspernatur excepturi inventore maxime accusamus quo molestiae impedit dicta iure ea deserunt unde repellat nulla, minima sunt vitae ipsam, iste, pariatur perspiciatis. <p></p> In nihil et quo laborum sit, aut accusamus vero rem distinctio debitis facere repellendus unde, excepturi maxime labore reprehenderit odio dolorum ullam molestiae voluptas alias pariatur corporis dolor quia. Autem ut dignissimos harum omnis, quaerat ex praesentium rerum iure quibusdam eligendi, provident soluta ipsa qui suscipit possimus neque id obcaecati aspernatur facilis molestias, corporis fuga. Eum, vitae.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'ipsum dolor sit amet consectetur adipisicing elit. Suscipit molestiae repellat alias, delectus omnis architecto? Assumenda voluptatem facere odio ducimus perferendis incidunt ut.',
        //     'body' => '<p> ipsum dolor sit amet consectetur adipisicing elit. Suscipit molestiae repellat alias, delectus omnis architecto? Assumenda voluptatem facere odio ducimus perferendis incidunt ut. <p></p> Et omnis commodi ipsum, aliquam quibusdam ea placeat id sapiente nostrum, modi eligendi assumenda quas? Repellendus omnis dolores earum facilis excepturi labore ullam reprehenderit voluptas, velit libero, unde perspiciatis ducimus.  Eius ex quia, cumque hic blanditiis accusamus, est optio perferendis reprehenderit tempora rerum quod fugit quaerat! Voluptas soluta aspernatur excepturi inventore maxime accusamus quo molestiae impedit dicta iure ea deserunt unde repellat nulla, minima sunt vitae ipsam, iste, pariatur perspiciatis. <p></p> In nihil et quo laborum sit, aut accusamus vero rem distinctio debitis facere repellendus unde, excepturi maxime labore reprehenderit odio dolorum ullam molestiae voluptas alias pariatur corporis dolor quia. Autem ut dignissimos harum omnis, quaerat ex praesentium rerum iure quibusdam eligendi, provident soluta ipsa qui suscipit possimus neque id obcaecati aspernatur facilis molestias, corporis fuga. Eum, vitae.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'ipsum dolor sit amet consectetur adipisicing elit. Suscipit molestiae repellat alias, delectus omnis architecto? Assumenda voluptatem facere odio ducimus perferendis incidunt ut.',
        //     'body' => '<p> ipsum dolor sit amet consectetur adipisicing elit. Suscipit molestiae repellat alias, delectus omnis architecto? Assumenda voluptatem facere odio ducimus perferendis incidunt ut. <p></p> Et omnis commodi ipsum, aliquam quibusdam ea placeat id sapiente nostrum, modi eligendi assumenda quas? Repellendus omnis dolores earum facilis excepturi labore ullam reprehenderit voluptas, velit libero, unde perspiciatis ducimus.  Eius ex quia, cumque hic blanditiis accusamus, est optio perferendis reprehenderit tempora rerum quod fugit quaerat! Voluptas soluta aspernatur excepturi inventore maxime accusamus quo molestiae impedit dicta iure ea deserunt unde repellat nulla, minima sunt vitae ipsam, iste, pariatur perspiciatis. <p></p> In nihil et quo laborum sit, aut accusamus vero rem distinctio debitis facere repellendus unde, excepturi maxime labore reprehenderit odio dolorum ullam molestiae voluptas alias pariatur corporis dolor quia. Autem ut dignissimos harum omnis, quaerat ex praesentium rerum iure quibusdam eligendi, provident soluta ipsa qui suscipit possimus neque id obcaecati aspernatur facilis molestias, corporis fuga. Eum, vitae.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'ipsum dolor sit amet consectetur adipisicing elit. Suscipit molestiae repellat alias, delectus omnis architecto? Assumenda voluptatem facere odio ducimus perferendis incidunt ut.',
        //     'body' => '<p> ipsum dolor sit amet consectetur adipisicing elit. Suscipit molestiae repellat alias, delectus omnis architecto? Assumenda voluptatem facere odio ducimus perferendis incidunt ut. <p></p> Et omnis commodi ipsum, aliquam quibusdam ea placeat id sapiente nostrum, modi eligendi assumenda quas? Repellendus omnis dolores earum facilis excepturi labore ullam reprehenderit voluptas, velit libero, unde perspiciatis ducimus.  Eius ex quia, cumque hic blanditiis accusamus, est optio perferendis reprehenderit tempora rerum quod fugit quaerat! Voluptas soluta aspernatur excepturi inventore maxime accusamus quo molestiae impedit dicta iure ea deserunt unde repellat nulla, minima sunt vitae ipsam, iste, pariatur perspiciatis. <p></p> In nihil et quo laborum sit, aut accusamus vero rem distinctio debitis facere repellendus unde, excepturi maxime labore reprehenderit odio dolorum ullam molestiae voluptas alias pariatur corporis dolor quia. Autem ut dignissimos harum omnis, quaerat ex praesentium rerum iure quibusdam eligendi, provident soluta ipsa qui suscipit possimus neque id obcaecati aspernatur facilis molestias, corporis fuga. Eum, vitae.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

    }
}
