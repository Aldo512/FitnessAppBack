<?php

namespace App\Policies;

use App\Models\NutritionPlans;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class NutritionPlansPolicy
{
    use HandlesAuthorization;
    use AuthorizesRequests;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        $this->authorize('nutrition plan: index', NutritionPlans::class);
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\NutritionPlans  $nutritionPlans
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, NutritionPlans $nutritionPlans)
    {
        $this->authorize('nutrition plan: show', NutritionPlans::class);
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        $this->authorize('nutrition plan: create', NutritionPlans::class);
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\NutritionPlans  $nutritionPlans
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, NutritionPlans $nutritionPlans)
    {
        $this->authorize('nutrition plan: update', NutritionPlans::class);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\NutritionPlans  $nutritionPlans
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, NutritionPlans $nutritionPlans)
    {
        $this->authorize('nutrition plan: delete', NutritionPlans::class);
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\NutritionPlans  $nutritionPlans
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, NutritionPlans $nutritionPlans)
    {
        $this->authorize('nutrition plan: restore', NutritionPlans::class);
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\NutritionPlans  $nutritionPlans
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, NutritionPlans $nutritionPlans)
    {
        $this->authorize('nutrition plan: force_delete', NutritionPlans::class);
    }
}
