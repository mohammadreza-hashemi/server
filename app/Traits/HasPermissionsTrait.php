<?php

namespace App\Traits;
trait HasPermissionsTrait
{

    public function hasRole(...$roles)
    {
        foreach ($roles as $role) {
            if ($this->roles->contains('name', $role)) {
                return true;
            }
        }

        return false;
    }

    public function hasPermissionTo($permission)
    {
        //Check has permission through role

        return $this->hasPermission($permission);
    }

    protected function hasPermission($permission)
    {
        return (bool)$this->permissions->where('name', $permission->name);
    }

    public function roles()
    {
        return $this->belongsToMany(\App\Models\Role::class, 'user_role');

    }

    public function permissions()
    {
        return $this->belongsToMany(\App\Models\Permission::class, 'users_permissions');

    }

}
