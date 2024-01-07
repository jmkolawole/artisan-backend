<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Services\LoginService;
use App\Traits\SendsApiResponse;
use Illuminate\Http\JsonResponse;


class LoginController extends Controller
{
  //
  use SendsApiResponse;

  protected $loginService;

  public function __construct(LoginService $loginService)
  {
    $this->loginService = $loginService;
  }


  public function login(LoginRequest $request): JsonResponse
  {
    try {
      $credentials = $request->only(['email', 'password']);
      $response = $this->loginService->attemptLogin($credentials);
      return $this->successResponse($response);
    } catch (\Exception $e) {
      return $this->failureResponse($e->getMessage(), (int)$e->getCode());
    }
  }
}
