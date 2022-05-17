<?php

namespace App\Policies;

use App\Models\Role;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DeleveryPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function getAll(User $user)
    {
        return $user->role_id == Role::IS_ADMIN;
    }
    public function show(User $user)
    {
        return in_array($user->role_id, [Role::IS_ADMIN, Role::IS_DELEVERY]);
    }
    public function store(User $user)
    {
        return $user->role_id == Role::IS_ADMIN;
    }
    public function update(User $user)
    {
        return in_array($user->role_id, [Role::IS_ADMIN, Role::IS_DELEVERY]);
    }
    public function delete(User $user)
    {
        return $user->role_id == Role::IS_ADMIN;
    }
}
