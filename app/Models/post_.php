<?php

namespace App\Models;

class post_ 
{
    private static $blog_posts = [
        [
            "title" => "Judul tulisan Pertama",
            "slug" => "judul-tulisan-pertama",
            "autor" => " Mutiara Laelani Firdaus",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore dolore a error dolores consectetur excepturi unde amet laboriosam nostrum ea rem perferendis quisquam quia explicabo, animi vel eligendi necessitatibus at consequatur minima corporis quas nihil voluptatum! A molestiae veritatis iure ut omnis. Ad sequi cupiditate quia amet tempora perferendis quibusdam doloremque, explicabo ipsam facere, ratione perspiciatis consequatur suscipit adipisci officia dolore, quisquam iure molestias ea repellat? Fugiat sint, iure, saepe, quos perferendis exercitationem cum quasi quia magni corporis nihil odit."
        ],
        [
            "title" => "Judul tulisan Mutiara",
            "slug" => "judul-tulisan-kMutiara",
            "autor" => " putri",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore dolore a error dolores consectetur excepturi unde amet laboriosam nostrum ea rem perferendis quisquam quia explicabo, animi vel eligendi necessitatibus at consequatur minima corporis quas nihil voluptatum! A molestiae veritatis iure ut omnis. Ad sequi cupiditate quia amet tempora perferendis quibusdam doloremque, explicabo ipsam facere, ratione perspiciatis consequatur suscipit adipisci officia dolore, quisquam iure molestias ea repellat? Fugiat sint, iure, saepe, quos perferendis exercitationem cum quasi quia magni corporis nihil odit."
        ],
    ];
    public static function all()
    {
        return collect(self::blog_posts);
    }

    public static function find($slug)
    {
        $posts = self::$blog_posts;
        return $post->firstWhere('slug', $slug);
    }
}
