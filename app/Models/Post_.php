<?php

namespace App\Models;


class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Alya Viyan Nada",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium fugiat quas perferendis qui! Fuga reiciendis autem est expedita inventore animi id, harum qui! Distinctio assumenda, repellendus possimus commodi quae beatae, provident est voluptatum nostrum minus culpa unde? Nisi nostrum possimus incidunt laborum eveniet! Aperiam, earum asperiores officia nulla possimus nesciunt, consequatur, consequuntur dicta quis nemo veniam voluptatem mollitia totam rerum illo nobis delectus. Tenetur a iste repellendus dolores dolor fugit perspiciatis possimus, natus atque officia dignissimos, suscipit ratione, dicta delectus?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Deka Wiratama",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis minus molestias ad in aspernatur voluptatibus voluptatem magnam. Magnam earum molestiae repellendus quasi pariatur expedita rem esse. Eaque delectus praesentium aperiam nulla incidunt, qui fugiat inventore beatae cumque perferendis id, perspiciatis voluptatibus. Porro expedita maiores minus, nemo id praesentium voluptate. Libero aliquam minus dolorem voluptate tempora inventore voluptatum deserunt animi totam? Totam eos delectus molestiae vel! Ea cupiditate delectus quam itaque vitae est deleniti facilis recusandae assumenda in nisi molestiae alias, id debitis inventore commodi iste similique quisquam voluptatum. Quae optio animi quaerat a sit tenetur sequi velit quidem hic quasi."
        ]
    ];

    public static function all()
    {
        return collect (self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
