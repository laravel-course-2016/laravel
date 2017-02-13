<?php namespace app\Repository;

use App\Models\Post;
use Illuminate\Support\Facades\Cache;

class PostsRepository
{
    public function getPostsOnMainPage()
    {
        return Cache::remember('main-posts', env('CACHE_TIME', 0), function () {
            return Post::with(['comments', 'sections'])
                ->active()
                ->intime()
                ->latest()
                ->paginate(config('blog.itemsPerPage'));
        });
    }

    public function getById()
    {

    }
}