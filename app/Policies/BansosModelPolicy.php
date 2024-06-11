<?php

namespace App\Policies;

use App\Models\bansosModel;
use App\Models\userModel;
use Illuminate\Auth\Access\Response;

class BansosModelPolicy
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
    public function view(userModel $userModel, bansosModel $bansosModel): bool
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
    public function update(userModel $userModel, bansosModel $bansosModel): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(userModel $userModel, bansosModel $bansosModel): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(userModel $userModel, bansosModel $bansosModel): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(userModel $userModel, bansosModel $bansosModel): bool
    {
        //
    }
}
