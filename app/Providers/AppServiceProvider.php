<?php

namespace App\Providers;

use App\Interfaces\AutoresRepositoryInterface;
use App\Interfaces\EmprestimosRepositoryInterface;
use App\Interfaces\LivrosRepositoryInterface;
use App\Interfaces\UsuariosRepositoryInterface;
use App\Repositories\AutoresRepository;
use App\Repositories\EmprestimosRepository;
use App\Repositories\LivrosRepository;
use App\Repositories\UsuariosRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(AutoresRepositoryInterface::class, AutoresRepository::class);
        $this->app->bind(LivrosRepositoryInterface::class, LivrosRepository::class);
        $this->app->bind(EmprestimosRepositoryInterface::class, EmprestimosRepository::class);
        $this->app->bind(UsuariosRepositoryInterface::class, UsuariosRepository::class);
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
