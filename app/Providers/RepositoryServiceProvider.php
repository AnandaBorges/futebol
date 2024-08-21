<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Registrar bindings de repositórios aqui

        // Exemplo de binding para um repositório e sua interface
        $this->app->bind(
            \App\Contracts\UserRepositoryInterface::class,
            \App\Repositories\EloquentUserRepository::class
        );

        // Registrar outro binding de repositório e interface
        $this->app->bind(
            \App\Contracts\OrderRepositoryInterface::class,
            \App\Repositories\EloquentOrderRepository::class
        );

        // Adicione outros bindings conforme necessário
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Normalmente não é necessário adicionar lógica específica aqui para repositórios
        // Se necessário, adicione configuração adicional ou inicialização
    }
}
