<?php

namespace App\Policies;

use App\Models\sosialModel;
use App\Models\userModel;
use Illuminate\Auth\Access\Response;

class SosialModelPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(userModel $userModel): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(userModel $userModel, sosialModel $sosialModel): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(userModel $userModel): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(userModel $userModel, sosialModel $sosialModel): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(userModel $userModel, sosialModel $sosialModel): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(userModel $userModel, sosialModel $sosialModel): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(userModel $userModel, sosialModel $sosialModel): bool
    {
        //
    }
}
