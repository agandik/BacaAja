<?php

namespace App\Models;



class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Diki Agustian",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, ratione quidem nemo ad, impedit facilis placeat, voluptatum totam soluta ipsam vel sed? Aperiam quo at similique praesentium repudiandae non ipsum."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Diki kuntul",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, ratione quidem nemo ad, impedit facilis placeat, voluptatum totam soluta ipsam vel sed? Aperiam quo at similique praesentium repudiandae non ipsum."
        ],
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p){
        //     if($p["slug"] == $slug){
        //         $post = $p;
        //     }
        // }

        return $posts->firstwhere('slug', $slug);
    }
}
