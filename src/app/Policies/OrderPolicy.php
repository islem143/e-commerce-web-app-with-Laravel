<?php

namespace App\Policies;

use App\Models\Order;
use App\Models\Role;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class OrderPolicy
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
    private function isAble(User $user, Order $order)
    {
        return $user->id == $order->user_id ? Response::allow() : Response::deny("You do not own this cart.");
    }
    public function show(User $user, Order $order)
    {
        return $this->isAble($user, $order);
    }
    public function store(User $user, Order $order)
    {
        return $this->isAble($user, $order);
    }
    public function update(User $user, Order $order)
    {
        return $this->isAble($user, $order);
    }
    public function destroy(User $user, Order $order)
    {
        return $this->isAble($user, $order);
        //return $user->role_id=Role::IS_ADMIN;
    }
}