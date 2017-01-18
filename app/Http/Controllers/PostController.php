<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function postBySlug($slug)
    {
        $post = Post::where('slug', $slug)
            ->active()
            ->intime()
            ->firstOrFail();

        return view('layouts.secondary', [
            'page' => 'pages.post',
            'title' => $post->title,
            'post' => $post
        ]);
    }

    public function listByTag($tag)
    {
        $posts = Tag::where('name', $tag)
            ->posts()
            ->active()
            ->intime()
            ->orderBy('id', 'DESC')
            ->get();

        return view('layouts.primary', [
            'page' => 'pages.main',
            'title' => 'Список статей по тегу ' . $tag,
            'image' => [
                'path' => 'assets/images/Me.jpg',
                'alt' => 'Image'
            ],
            'posts' => $posts,
        ]);
    }

    public function listBySection($section)
    {
        $posts = Section::where('name', $section)
            ->posts()
            ->active()
            ->intime()
            ->orderBy('id', 'DESC')
            ->get();

        return view('layouts.primary', [
            'page' => 'pages.main',
            'title' => 'Список статей в разделе ' . $section,
            'image' => [
                'path' => 'assets/images/Me.jpg',
                'alt' => 'Image'
            ],
            'posts' => $posts,
        ]);
    }
}
