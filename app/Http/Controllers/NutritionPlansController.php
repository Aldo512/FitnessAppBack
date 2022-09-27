<?php

namespace App\Http\Controllers;

use App\Models\NutritionPlans;
use App\Http\Requests\StoreNutritionPlansRequest;
use App\Http\Requests\UpdateNutritionPlansRequest;

class NutritionPlansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return NutritionPlans::all();
    }

    public function store(StoreNutritionPlansRequest $request)
    {
        NutritionPlans::create($request);
        return 'OK';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NutritionPlans  $nutritionPlans
     * @return \Illuminate\Http\Response
     */
    public function show(NutritionPlans $nutritionPlans)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NutritionPlans  $nutritionPlans
     * @return \Illuminate\Http\Response
     */
    public function edit(NutritionPlans $nutritionPlans)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNutritionPlansRequest  $request
     * @param  \App\Models\NutritionPlans  $nutritionPlans
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNutritionPlansRequest $request, NutritionPlans $nutritionPlans)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NutritionPlans  $nutritionPlans
     * @return \Illuminate\Http\Response
     */
    public function destroy(NutritionPlans $nutritionPlans)
    {
        //
    }
}
