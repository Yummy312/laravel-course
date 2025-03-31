<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        // $posts = Post::all(); // Забрать все посты

        $posts = Post::where('title', 'second post')->get(); // метод get() всегда возвращает массив даже если там 1 объект
        
        foreach($posts as $post){
            dd($post->title); // вытащить поле title
        }

    }

    public function create(){
        $postsArr = [
            [
                'title'=> 'title of post vscode',
                'content' => 'some interesting content',
                'image' => 'image.jpeg',
                'likes' => 20,
                'is_published' => 1,
                
            ],

            [
                'title' => 'title of post vscode 2',
                'content' => 'some interesting content 2',
                'image' => 'image.jpeg',
                'likes' => 50,
                'is_published' => 1,

            ]
            ];

            foreach($postsArr as $post){
                Post::create($post);
            }
            dd('created');
    }

    public function update(){
        $post = Post::find(1);
        $post -> update([
            'title' => 'first post updated'
        ]);

        dd('updated');
    }

    public function delete(){


        // Удаление должно быть выполнено так, чтобы данные можно было восстановить при необходимости. 
        // Для этого нужно в миграции добавить метод softDeletes(), чтобы создать поле для мягкого удаления в  таблице, а в модели — использовать метод softDeletes, чтобы активировать поддержку мягкого удаления.

        $post = Post::find(2);
        $post->delete();
        dd('post deleted');
    }

}
