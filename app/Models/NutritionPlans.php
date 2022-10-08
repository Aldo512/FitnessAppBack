<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasTimestamps;
use Dyrynda\Database\Support\CascadeSoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NutritionPlans extends Model
{
    use HasFactory, HasTimestamps, SoftDeletes, CascadeSoftDeletes;

    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'description',
        'body'
    ];

    protected $dates = ['deleted_at'];

    protected $cascadeDeletes = [];
}
