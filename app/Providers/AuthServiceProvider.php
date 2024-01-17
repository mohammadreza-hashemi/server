<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Services\Auth\JwtGuard;

use http\Client\Curl\User;
use http\Env\Request;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {


        Auth::viaRequest('custom-token', function (\Illuminate\Http\Request $request) {
            return User::where('token', (string)$request->token)->first();
        });


    }
}
