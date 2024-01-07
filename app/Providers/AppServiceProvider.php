<?php

namespace App\Providers;

use App\Http\Controllers\MySQLConnection;
use App\Http\Controllers\ConnectionInterface;
use App\Http\Controllers\UserController;
use App\Models\User;
use App\Repositories\UsersRepository;
use App\Services\UserService;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider implements DeferrableProvider
{

    public $bindings = [
//        ConnectionInterface::class => MySQLConnection::class,
    ];
    public $singleton = [
//        ConnectionInterface::class => MySQLConnection::class,
    ];


    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        $this->app->bind('users', UsersRepository::class);
        App::bind('USER_SERVICE', UserService::class);
        App::when(UserController::class)
            ->needs('$value')
            ->give('name');
    }





}
