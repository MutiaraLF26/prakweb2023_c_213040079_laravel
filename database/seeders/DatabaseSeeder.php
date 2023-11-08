<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
      

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'nazwa',
        //     'email' => 'nazwa@gmail.com',
        //     'password' => bcrypt('87645')
        // ]);

        // User::create([
        //     'name' => 'Mutiara Laelani Firdaus',
        //     'email' => 'Mutiara@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'wpersonal'
        ]);

        Post::factory(20)->create();
    
        // Post::create([
        //     'title' =>'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur vel ratione, animi, rerum minus labore eveniet est rem cumque dolorum iusto accusamus ut dolores aperiam architecto quis.',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur vel ratione, animi, rerum minus labore eveniet est rem cumque dolorum iusto accusamus ut dolores aperiam architecto quis. Quo officiis molestiae fuga, obcaecati unde provident expedita necessitatibus est autem fugiat nihil veritatis. </p><p>Libero accusamus assumenda quidem quod blanditiis culpa sequi doloribus nisi fugiat! Labore non eveniet illum dolorum modi sunt itaque odit, eligendi quis nostrum, beatae, repellendus qui. Voluptatum omnis odit at numquam officiis itaque ipsum molestias odio, nemo, vitae blanditiis animi, unde earum provident. </p><p>Temporibus fuga animi repellat laudantium dolorem praesentium numquam unde id veritatis, enim facilis quos repellendus. Odit quod exercitationem, voluptates, quaerat deleniti veniam magnam modi laudantium reiciendis quae laboriosam laborum id veritatis quas minus nulla ad soluta nemo eaque, quasi dolorum! Iure laborum consectetur beatae eligendi non ullam aperiam. Dignissimos eaque dolores at repudiandae aperiam quis quisquam pariatur laboriosam, rerum harum. Hic iure laudantium placeat eius error?</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' =>'Judul Ke Dua',
        //     'slug' => 'judul-Ke-Dua',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur vel ratione, animi, rerum minus labore eveniet est rem cumque dolorum iusto accusamus ut dolores aperiam architecto quis.',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur vel ratione, animi, rerum minus labore eveniet est rem cumque dolorum iusto accusamus ut dolores aperiam architecto quis. Quo officiis molestiae fuga, obcaecati unde provident expedita necessitatibus est autem fugiat nihil veritatis. </p><p>Libero accusamus assumenda quidem quod blanditiis culpa sequi doloribus nisi fugiat! Labore non eveniet illum dolorum modi sunt itaque odit, eligendi quis nostrum, beatae, repellendus qui. Voluptatum omnis odit at numquam officiis itaque ipsum molestias odio, nemo, vitae blanditiis animi, unde earum provident. </p><p>Temporibus fuga animi repellat laudantium dolorem praesentium numquam unde id veritatis, enim facilis quos repellendus. Odit quod exercitationem, voluptates, quaerat deleniti veniam magnam modi laudantium reiciendis quae laboriosam laborum id veritatis quas minus nulla ad soluta nemo eaque, quasi dolorum! Iure laborum consectetur beatae eligendi non ullam aperiam. Dignissimos eaque dolores at repudiandae aperiam quis quisquam pariatur laboriosam, rerum harum. Hic iure laudantium placeat eius error?</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' =>'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur vel ratione, animi, rerum minus labore eveniet est rem cumque dolorum iusto accusamus ut dolores aperiam architecto quis.',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur vel ratione, animi, rerum minus labore eveniet est rem cumque dolorum iusto accusamus ut dolores aperiam architecto quis. Quo officiis molestiae fuga, obcaecati unde provident expedita necessitatibus est autem fugiat nihil veritatis. </p><p>Libero accusamus assumenda quidem quod blanditiis culpa sequi doloribus nisi fugiat! Labore non eveniet illum dolorum modi sunt itaque odit, eligendi quis nostrum, beatae, repellendus qui. Voluptatum omnis odit at numquam officiis itaque ipsum molestias odio, nemo, vitae blanditiis animi, unde earum provident. </p><p>Temporibus fuga animi repellat laudantium dolorem praesentium numquam unde id veritatis, enim facilis quos repellendus. Odit quod exercitationem, voluptates, quaerat deleniti veniam magnam modi laudantium reiciendis quae laboriosam laborum id veritatis quas minus nulla ad soluta nemo eaque, quasi dolorum! Iure laborum consectetur beatae eligendi non ullam aperiam. Dignissimos eaque dolores at repudiandae aperiam quis quisquam pariatur laboriosam, rerum harum. Hic iure laudantium placeat eius error?</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
