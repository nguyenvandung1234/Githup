<?php

namespace App\Providers;

use App\Models\Comment;
use App\Models\Customer;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     *@var array<class-string, class-string>
     */
    protected $policies=[
        //
    ];

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
       Gate::define('my-comment',function(Customer $user,Comment $comm){
            return $user->id==$comm->customer_id;
       });
    }
}