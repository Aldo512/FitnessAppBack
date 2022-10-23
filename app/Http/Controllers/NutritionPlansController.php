<?php

namespace App\Http\Controllers;

use App\Models\NutritionPlans;
use App\Http\Requests\StoreNutritionPlansRequest;
use App\Http\Requests\UpdateNutritionPlansRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        DB::beginTransaction();
        try {
            $nutritionPlan = NutritionPlans::create($request->all());
            DB::commit();
            return $nutritionPlan;
        } catch (\Exception $e) {
            DB::rollBack();
            return $e->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        return NutritionPlans::findOrFail($id);
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
        DB::beginTransaction();
        try {
            $nutritionPlan = NutritionPlans::findOrFail($request->get('id'));
            $nutritionPlan->update($request->all());
            DB::commit();
            return $nutritionPlan;
        } catch (\Exception $e) {
            DB::rollBack();
            return $e->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  integer  $is
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $plan = NutritionPlans::findOrFail($id);
            $plan->delete();
            DB::commit();
            return $plan;
        } catch (\Error $e) {
            DB::rollBack();
            return $this->sendError($e->getMessage());
        }
    }
}
