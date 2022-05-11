<?php

namespace App\Providers;

use App\Policies\BannerPolicy;
use App\Policies\ClientPolicy;
use App\Policies\ServicePolicy;
use App\Policies\UserPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('create-service', [ServicePolicy::class, 'create']);
        Gate::define('update-service', [ServicePolicy::class, 'update']);
        Gate::define('create-client', [ClientPolicy::class, 'create']);
        Gate::define('update-client', [ClientPolicy::class, 'update']);
        Gate::define('create-user', [UserPolicy::class, 'create']);
        Gate::define('update-user', [UserPolicy::class, 'update']);
        Gate::define('update-banner', [BannerPolicy::class, 'update']);
    }
}
