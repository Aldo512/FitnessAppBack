<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;

it('has welcome page')->get('api/nutrition_plan')
  ->assertStatus(200);
