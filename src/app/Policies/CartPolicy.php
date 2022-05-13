<?php

namespace App\Policies;

use App\Models\Cart;
use App\Models\Role;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class CartPolicy
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
    private function isAble(User $user, Cart $cart)
    {
        return $user->id == $cart->user_id ? Response::allow() : Response::deny("You do not own this cart.");
    }
    private function getAllCarts(User $user)
    {
        return $user->role_id == Role::IS_ADMIN;
    }
    public function show(User $user, Cart $cart)
    {
        return $this->isAble($user, $cart);
    }
    public function store(User $user, Cart $cart)
    {
        return $this->isAble($user, $cart);
    }
    public function update(User $user, Cart $cart)
    {
        return $this->isAble($user, $cart);
    }
    public function destroy(User $user, Cart $cart)
    {
        return $this->isAble($user, $cart);
    }
}
