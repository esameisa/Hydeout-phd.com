<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\App\Repositories\TemplateRepository::class, \App\Repositories\TemplateRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\EventsRepository::class, \App\Repositories\EventsRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\GalleryRepository::class, \App\Repositories\GalleryRepositoryEloquent::class);

        $this->app->bind(\App\Repositories\StoreRepository::class, \App\Repositories\StoreRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\MessageRepository::class, \App\Repositories\MessageRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\ContactRepository::class, \App\Repositories\ContactRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\UserRepository::class, \App\Repositories\UserRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\SettingRepository::class, \App\Repositories\SettingRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\PointRepository::class, \App\Repositories\PointRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\GalleryItemRepository::class, \App\Repositories\GalleryItemRepositoryEloquent::class);
        //:end-bindings:
    }
}
