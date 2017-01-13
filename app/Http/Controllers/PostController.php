<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function post($id)
    {
        $post = Post::find($id);

        return view('layouts.secondary', [
            'page' => 'pages.post',
            'title' => 'Написать мне',
            'content' => '<p>Привет, меня зовут Дмитрий Юрьев и я веб разработчик!</p>',
            'activeMenu' => 'feedback',
            'post' => $post
        ]);
    }        
}
