<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(\App\Repositories\ClienteRepository::class, \App\Repositories\ClienteRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\UserRepository::class, \App\Repositories\UserRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\NotaRepository::class, \App\Repositories\NotaRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\NotaProdutoRepository::class, \App\Repositories\NotaProdutoRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\ProdutoRepository::class, \App\Repositories\ProdutoRepositoryEloquent::class);
        //:end-bindings:
    }
}
