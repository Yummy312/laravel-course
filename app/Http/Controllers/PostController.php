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

    public function firstOrCreate(){
        $anotherPost = [
            'title' => 'some post',
            'content' => 'some content',
            'image' => 'someImage.jpeg',
            'likes' => 100,
            'is_published' => 1,
        ];
        
        $post = Post::firstOrCreate(
            ['title'=> 'some post'],  // Атрибуты, по которым ищется запись
         $anotherPost  //Если такого нет, создается новый пост 
        );

        dd($post -> title);
    }


    public function updateOrCreate(){
        $anotherPost = [
            'title' => 'updateorcreate some post',
            'content' => 'updateorcreate some post',
            'image' => 'updateorcreate.jpeg',
            'likes' => 3,
            'is_published' => 0,
        ];

        $post = Post::updateOrCreate(
            ['title' => 'updateorcreate some post'], // Ищем пост с заголовком 'updateorcreate some post'
            $anotherPost  //Если пост найден, обновляем его, если нет — создаем новый с данными из $anotherPost
            
        );

        dd($post -> content);
    }
}
