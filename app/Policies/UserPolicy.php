<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Gate;

class UserPolicy
{
//    public function before(User $user, $ability)
//    {
//        if ($user->id === 5) {
//            return true;
//        }
//    }

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, User $model): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, User $model)
    {
        return $user->id === 12;
    }


    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, User $model): Response
    {
        return $user->id === 12
            ? Response::allow()
            : Response::deny('you dont have access');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, User $model): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, User $model): bool
    {
        //
    }
}
