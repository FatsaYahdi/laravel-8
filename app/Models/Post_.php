<?php

namespace App\Models;


class Post {
    private static $blog_posts = [
    [
        'title' => "Judul Post Pertama",
        'slug' => "judul-post-pertama",
        'author' => 'cow2',
        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum suscipit, impedit reiciendis quibusdam id minima sequi magnam est fugit eveniet sunt! Odio provident dolores dignissimos, aut quos praesentium voluptate iste vel aliquam quisquam illum totam odit doloribus ipsam autem quod soluta veniam fuga laborum error possimus dicta. Laboriosam, quia ut!'
    ],
    [
        'title' => "Judul Post Kedua",
        'slug' => "judul-post-kedua",
        'author' => 'cow2',
        'body' => 'Lorem ipsum dor sit met const adipiss cing elit. Ipsum suscipit, impedit reiciendis quibusdam id minima sequi magnam est fugit eveniet sunt! Odio provident dolores dignissimos, aut quos praesentium voluptate iste vel aliquam quisquam illum totam odit doloribus ipsam autem quod soluta veniam fuga laborum error possimus dicta. Laboriosam, quia ut!'
    ]
    ];
    public static function all() {
        return collect(self::$blog_posts);
    }
    public static function find($slug){
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
