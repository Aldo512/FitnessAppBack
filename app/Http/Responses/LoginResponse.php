<?php

namespace App\Http\Responses;

use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{

  public function toResponse($request)
  {

    // below is the existing response
    // replace this with your own code
    // the user can be located with Auth facad

    return response()->json(Auth::user());
  }
}
