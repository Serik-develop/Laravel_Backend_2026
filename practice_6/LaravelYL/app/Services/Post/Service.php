<?php


namespace App\Services\Post;

use App\Models\Post;

class Service{

    public function store($data){
        /*$tags = $data['tags'];
        unset($data['tags']);
        $post = Post::create($data);
        $post->tags()->attach($tags);*/
         $tags = $data['tags'] ?? []; // если нет 'tags', будет пустой массив
        unset($data['tags']);

        $post = Post::create($data);

        if (!empty($tags)) {
            $post->tags()->attach($tags);
        }
        return $post;
    }

    public function update($post, $data){
        /*$tags = $data['tags'];
        unset($data['tags']);
        $post->update($data);
        $post->tags()->sync($tags);*/
        $tags = $data['tags'] ?? [];
        unset($data['tags']);

        $post->update($data);

        if (!empty($tags)) {
            $post->tags()->sync($tags);
        } else {
            $post->tags()->sync([]); // удаляем все теги, если передано пусто
        }
        return $post->fresh();
    }
}
