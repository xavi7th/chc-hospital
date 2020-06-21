<?php

namespace App\Modules\AppUser\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
  /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

  use AuthenticatesUsers;

  /**
   * Where to redirect users after login.
   *
   * @var string
   */
  protected $redirectTo = RouteServiceProvider::HOME;

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware('guest')->except('logout');
  }

  static function routes()
  {
    Route::group(['middleware' => 'web', 'namespace' => '\App\Modules\AppUser\Http\Controllers'], function () {
      Route::view('/login', 'appuser::index')->middleware('guest')->name('app.login');
      Route::post('login', 'LoginController@login')->name('app.login');
      Route::post('logout', 'LoginController@logout')->name('app.logout')->middleware('auth');
    });
  }



  /**
   * Get the token array structure.
   *
   * @param  string $token
   *
   * @return array api jwt token details
   */
  protected function respondWithToken($token)
  {
    return [
      'access_token' => $token,
      'token_type' => 'bearer',
      'expires_in' => $this->apiGuard()->factory()->getTTL() * 60
    ];
  }

  /**
   * Handle a login request to the application.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Http\JsonResponse
   *
   * @throws \Illuminate\Validation\ValidationException
   */
  public function login(Request $request)
  {
    $this->validateLogin($request);

    // If the class is using the ThrottlesLogins trait, we can automatically throttle
    // the login attempts for this application. We'll key this by the username and
    // the IP address of the client making these requests into this application.
    if (
      method_exists($this, 'hasTooManyLoginAttempts') &&
      $this->hasTooManyLoginAttempts($request)
    ) {
      $this->fireLockoutEvent($request);

      return $this->sendLockoutResponse($request);
    }

    if ($this->attemptLogin($request)) {

      return $this->sendLoginResponse($request);
    }

    // If the login attempt was unsuccessful we will increment the number of attempts
    // to login and redirect the user back to the login form. Of course, when this
    // user surpasses their maximum number of attempts they will get locked out.
    $this->incrementLoginAttempts($request);

    return $this->sendFailedLoginResponse($request);
  }

  /**
   * Attempt to log the user into the application.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return bool
   */
  protected function attemptLogin(Request $request)
  {
    /**
     * Try to log the user in from the lower guard to the higher guard
     * ! is this safe?
     */
    return $rsp = ($u = Auth::guard('app_user')->attempt($this->credentials($request), $request->filled('remember'))) ?  $u : ($u = Auth::guard('admin')->attempt($this->credentials($request), $request->filled('remember'))) ?  $u : ($u = Auth::guard('super_admin')->attempt($this->credentials($request), $request->filled('remember'))) ?  $u : false;
  }

  /**
   * Send the response after the user was authenticated.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  protected function sendLoginResponse(Request $request)
  {
    $request->session()->regenerate();

    $this->clearLoginAttempts($request);
    if ($response = $this->authenticated($request, $this->authenticatedGuard()->user())) {
      return $response;
    }

    return $request->wantsJson()
      ? new Response('', 204)
      : redirect()->intended($this->redirectPath());
  }

  /**
   * The user has been authenticated. We can redirect them to where we want or leave empty for the redirectTo property to handle
   * !Look into the implementation in version 7 and see what you want to change
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  mixed  $user
   * @return mixed
   */
  protected function authenticated(Request $request, User $user)
  {
    return redirect()->route($user->dashboardRoute());
  }


  /**
   * Get the login username to be used by the controller.
   *
   * @return string
   */
  public function username()
  {
    return 'email';
  }

  /**
   * Get the guard to be used during authentication.
   *
   * @return \Illuminate\Contracts\Auth\StatefulGuard
   */
  protected function guard()
  {
    return Auth::guard('app_user');
  }

  protected function apiGuard()
  {
    return Auth::guard('jwt_api');
  }

  protected function authenticatedGuard()
  {
    if (Auth('app_user')->check()) {
      return Auth::guard('app_user');
    } elseif (Auth('admin')->check()) {
      return Auth::guard('admin');
    } elseif (Auth('super_admin')->check()) {
      return Auth::guard('super_admin');
    }
  }


  /**
   * Log the user out of the application.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function logout(Request $request)
  {
    $this->guard()->logout();

    $request->session()->invalidate();

    try {
      $this->apiGuard()->logout();
    } catch (\Throwable $e) { }

    if ($request->ajax() || $request->expectsJson()) {
      return response()->json(['rsp' => true], 200);
    }
    return redirect()->route('admin.login');
  }
}
