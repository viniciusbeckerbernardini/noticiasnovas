<?php

namespace App\Providers;

use App\Contracts\CategoryRepositoryContract;
use App\Contracts\PostRepositoryContract;
use App\Repositories\CategoryRepository;
use App\Repositories\PostRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(CategoryRepositoryContract::class, CategoryRepository::class);
        $this->app->singleton(PostRepositoryContract::class,PostRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
