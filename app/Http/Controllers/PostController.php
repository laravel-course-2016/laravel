<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function post($slug)
    {
        $post = Post::where('slug', $slug)
            ->active()
            ->intime()
            ->firstOrFail();

        return view('layouts.secondary', [
            'page' => 'pages.post',
            'title' => 'Написать мне',
            'content' => '<p>Привет, меня зовут Дмитрий Юрьев и я веб разработчик!</p>',
            'activeMenu' => 'feedback',
            'post' => $post
        ]);
    }        
}
