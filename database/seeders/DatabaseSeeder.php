<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

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
            'name' => 'Hidayat Firdaus',
            'username' => 'hidayatfrds',
            'email' => 'kitabisakarenausaha@gmail.com',
            'profesi' => 'Full Stack Developer || IT Support',
            'password' => bcrypt('Google47'),
            'is_admin' => 1,
        ]);
        User::create([
            'name' => 'Muhammad Lutfi Edi Kurniawan',
            'username' => 'lutfi',
            'email' => 'lutfi@gmail.com',
            'profesi' => 'Back end developer',
            'password' => bcrypt('password'),
            'is_admin' => 0,
        ]);
        User::create([
            'name' => 'Dinda Surya Baskoro',
            'username' => 'didin',
            'email' => 'didin@gmail.com',
            'profesi' => 'Software engineer',
            'password' => bcrypt('password'),
            'is_admin' => 0,
        ]);
        User::create([
            'name' => 'Ruslan Rumat Hoda',
            'username' => 'ruslan',
            'email' => 'ruslan@gmail.com',
            'profesi' => 'Web Developer',
            'password' => bcrypt('password'),
            'is_admin' => 0,
        ]);
        User::create([
            'name' => 'Atika Yulia',
            'username' => 'atika',
            'email' => 'atika@gmail.com',
            'profesi' => 'Quality assurance engineer',
            'password' => bcrypt('password'),
            'is_admin' => 0,
        ]);

        // User::create([
        //     'name' => 'Svet Lana',
        //     'email' => 'svetlana@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Legolaz',
        //     'email' => 'legolas@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        // User::factory(5)->create();

        Category::create([
            'name' => 'Web programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Gaming PC',
            'slug' => 'gaming-pc'
        ]);

        Category::create([
            'name' => 'Technology',
            'slug' => 'technology'
        ]);
        Category::create([
            'name' => 'Internet',
            'slug' => 'internet'
        ]);
        Category::create([
            'name' => 'Internet Of Thing',
            'slug' => 'internet-of-thing'
        ]);
        Category::create([
            'name' => 'PC Game',
            'slug' => 'pcgame'
        ]); 

        Post::factory(40)->create();
        
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, eligendi?',
        //     'body' => '<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, omnis. </p><p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab reprehenderit illo nesciunt ipsam quo nobis blanditiis et, facilis incidunt dicta? </p><p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate, neque velit ratione impedit quaerat laboriosam eligendi sit quam nisi hic dolorum beatae doloribus molestias unde. </p><p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt id velit minima repellendus tempore a explicabo incidunt, vel deleniti? Laudantium aut dignissimos quaerat tempore minima. Odio iure asperiores dolore, quis, aut dolorum exercitationem minima, vitae beatae expedita odit esse. Dolorem atque vel nostrum beatae eaque ea harum maiores iure ratione? </p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, eligendi?',
        //     'body' => '<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, omnis. </p><p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab reprehenderit illo nesciunt ipsam quo nobis blanditiis et, facilis incidunt dicta? </p><p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate, neque velit ratione impedit quaerat laboriosam eligendi sit quam nisi hic dolorum beatae doloribus molestias unde. </p><p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt id velit minima repellendus tempore a explicabo incidunt, vel deleniti? Laudantium aut dignissimos quaerat tempore minima. Odio iure asperiores dolore, quis, aut dolorum exercitationem minima, vitae beatae expedita odit esse. Dolorem atque vel nostrum beatae eaque ea harum maiores iure ratione? </p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, eligendi?',
        //     'body' => '<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, omnis. </p><p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab reprehenderit illo nesciunt ipsam quo nobis blanditiis et, facilis incidunt dicta? </p><p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate, neque velit ratione impedit quaerat laboriosam eligendi sit quam nisi hic dolorum beatae doloribus molestias unde. </p><p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt id velit minima repellendus tempore a explicabo incidunt, vel deleniti? Laudantium aut dignissimos quaerat tempore minima. Odio iure asperiores dolore, quis, aut dolorum exercitationem minima, vitae beatae expedita odit esse. Dolorem atque vel nostrum beatae eaque ea harum maiores iure ratione? </p>',
        //     'category_id' => 3,
        //     'user_id' => 3
        // ]);

        // Post::create([
        //     'title' => 'Judul keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, eligendi?',
        //     'body' => '<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, omnis. </p><p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab reprehenderit illo nesciunt ipsam quo nobis blanditiis et, facilis incidunt dicta? </p><p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate, neque velit ratione impedit quaerat laboriosam eligendi sit quam nisi hic dolorum beatae doloribus molestias unde. </p><p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt id velit minima repellendus tempore a explicabo incidunt, vel deleniti? Laudantium aut dignissimos quaerat tempore minima. Odio iure asperiores dolore, quis, aut dolorum exercitationem minima, vitae beatae expedita odit esse. Dolorem atque vel nostrum beatae eaque ea harum maiores iure ratione? </p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);


    }
}
