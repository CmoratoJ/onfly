<?php

namespace App\Policies;

use App\Models\Despesa;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DespesaPolicy
{
    use HandlesAuthorization;

    public function findById(User $user, Despesa $despesa) {
        return $user->id === $despesa->user_id;
    }
}
