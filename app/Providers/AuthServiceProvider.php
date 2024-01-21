<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use App\Traits\HasPermissionsTrait;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;

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
    public function boot()
    {
        foreach (Permission::all() as $permission) {
            foreach ($permission->roles as $role) {
                $rolewithuser = Role::with('users')->where('id', $role['id'])->get();
                $toarray = $rolewithuser->toArray();
                foreach ($toarray[0]['users'] as $x) {
                    Gate::define($permission['name'], function ($user) use ($x) {
                        return $user->id === $x['id'];
                    });
                }
            }
        }

    }
}
