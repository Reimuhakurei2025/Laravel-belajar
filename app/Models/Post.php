<?php
namespace App\Models;

use Illuminate\Support\Arr;


class Post{
        public static function all(){
            return [
                [
                'image'=>asset('img/smk.jpg'),
                'date'=>'2020-2023',
                'id'=>'1',
                'slug'=>'smk',
                'Title' => 'SMK (sekolah Menengah Kejuruan)',
                'Body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste nisi illum eveniet delectus facilis eos officia fugiat nihil molestias quis quia atque ad alias minima, nesciunt reiciendis et accusamus ducimus. Illo ad modi ratione ut alias eveniet accusamus ducimus at non suscipit, debitis est aliquid?'
                ]
            ,
                [
                'image'=>asset('img/smp.jpg'),
                'date'=>'2017-2020',
                'id'=>'2',
                'slug'=>'smp',
                'Title' => 'SMP (sekolah Menengah Pertama)',
                "Body"=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio est, ipsa atque distinctio ut non minus maiores eligendi cum delectus. Facilis nesciunt, consequuntur inventore voluptates consequatur tempore ipsa repellendus at.
                Reprehenderit rem eaque laborum eligendi inventore harum quo optio! Reiciendis quidem mollitia quam illum sapiente non nulla, consequatur dicta animi ipsa! Quod unde dolorem quia vel est, a assumenda minima!
                Iure quae doloribus numquam ipsum quam in asperiores necessitatibus deleniti earum error ipsa quasi itaque esse ad aut aliquam eligendi assumenda velit, fuga ratione. Blanditiis totam eos voluptas voluptatibus ratione!'
                ]
                    ];
        }

        public static function find($slug):array{
            $Post = Arr::first(static::all(), function($post) use ($slug){
                return $post['slug'] === $slug;
            });
            if (!$Post) {
                abort(404);
            }
            return $Post ;
        }
    }
