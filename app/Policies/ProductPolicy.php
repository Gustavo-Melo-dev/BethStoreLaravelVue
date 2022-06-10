<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Contracts\Auth\Authenticatable;

class ProductPolicy
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

    public function create(Authenticatable $user){
        return $user->role === 'admin';
    }

    public function update(Authenticatable $user){
        return $user->role === 'admin';
    }

    public function delete(Authenticatable $user){
        return $user->role === 'admin';
    } 
}
