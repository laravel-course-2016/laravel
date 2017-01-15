<?php namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Section, App\Models\Post;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->renderSharedViews();
    }

    protected function renderSharedViews()
    {
        View::share('sectionList', view('parts.sectionList', [
            'sections' => Section::all()
        ])->render());

        View::share('favoritePost', view('parts.favoritePost', [
            'post' => Post::where('is_favorite', 1)
                ->orderBy('id', 'DESC')
                ->take(1)
                ->first()
        ])->render());
    }
}
