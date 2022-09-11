<?php

namespace App\Providers;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
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
        Gate::before(function($user){
            if($user->hasRole('SuperAdmin')){
                return true;
            }
        });
        Gate::define('update_products',function(User $user ,Product $product){
            return $user->id === $product->user_id;
        });
        /*Gate::define('edit-post', function (User $user, Post $post) {
            return $user->id === $post->user_id;
        });*/

    }
}
