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


}
