<?php

namespace App\Services;

use App\Models\User;
use App\Traits\JWT;
use Carbon\Carbon;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;


class LoginService
{
  use JWT;

  protected $expiresIn;
  protected $jwtToken;

  public function attemptLogin(array $credentials)
  {
    $user = User::where('email', $credentials['email'])->first();

    if ($user && Hash::check($credentials['password'], $user->password)) {
      return $this->createLoginResponse($user);
    }

    throw new \Exception("Invalid User Or Password", Response::HTTP_UNAUTHORIZED);
  }

  protected function createLoginResponse(User $user): array
  {
    $this->expiresIn = Carbon::now()->addDays(30)->timestamp;
    $this->createPayload($user->id, $user->email, $this->expiresIn);

    $this->jwtToken = $this->jwtToken();
    $this->updateLoginInformation($user);

    return [
      'username' => $user->username,
      'email' => $user->email,
      'name' => $user->firstname . ' ' . $user->last_name,
      //'image' => $rolesPermissions['user_data']->profile_image,
      'access_token' => $this->jwtToken,
      'is_admin' => $user->is_admin,
      'expiresIn' => $this->expiresIn
    ];
  }

  protected function updateLoginInformation(User $user): void
  {
    $user->last_login = Carbon::now();
    $user->access_token = $this->jwtToken;
    $user->save();
  }
}
