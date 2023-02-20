<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Barang;
use Illuminate\Auth\Access\HandlesAuthorization;

class BarangPolicy
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

    public function update(User $user, Barang $barang){
        return $user->id === $barang->user_id;
    }
    public function delete(User $user, Barang $barang){
        return $user->id === $barang->user_id;
    }
}
