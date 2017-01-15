<?php

namespace App\Providers;

use App\Models\Section;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ShareServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        View::share('sectionList', view('parts.sectionList', [
            'sections' => Section::all()
        ])->render());
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
