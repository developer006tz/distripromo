<?php

namespace App\Policies;

use App\Models\User;
use App\Models\SentMessage;
use Illuminate\Auth\Access\HandlesAuthorization;

class SentMessagePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the sentMessage can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('list sentmessages');
    }

    /**
     * Determine whether the sentMessage can view the model.
     */
    public function view(User $user, SentMessage $model): bool
    {
        return $user->hasPermissionTo('view sentmessages');
    }

    /**
     * Determine whether the sentMessage can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create sentmessages');
    }

    /**
     * Determine whether the sentMessage can update the model.
     */
    public function update(User $user, SentMessage $model): bool
    {
        return $user->hasPermissionTo('update sentmessages');
    }

    /**
     * Determine whether the sentMessage can delete the model.
     */
    public function delete(User $user, SentMessage $model): bool
    {
        return $user->hasPermissionTo('delete sentmessages');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     */
    public function deleteAny(User $user): bool
    {
        return $user->hasPermissionTo('delete sentmessages');
    }

    /**
     * Determine whether the sentMessage can restore the model.
     */
    public function restore(User $user, SentMessage $model): bool
    {
        return false;
    }

    /**
     * Determine whether the sentMessage can permanently delete the model.
     */
    public function forceDelete(User $user, SentMessage $model): bool
    {
        return false;
    }
}
