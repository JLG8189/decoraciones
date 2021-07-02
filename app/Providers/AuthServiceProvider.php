<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Pedido;
use App\Models\Team;
use App\Policies\TeamPolicy;
use App\Policies\PedidoPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Team::class => TeamPolicy::class,
        Pedido::class => PedidoPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        /*Gate::define('admin-pedidos', function (User $user) {
            return $user->tipo == 'Administrador';
        });*/ 
    }
}
