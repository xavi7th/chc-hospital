<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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
	 * The user has been authenticated. We can redirect them to where we want or leave empty for the redirectTo property to handle
	 * !Look into the implementation in version 7 and see what you want to change
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  mixed  $user
	 * @return mixed
	 */
	protected function authenticated(Request $request, $user)
	{
		if (Admin::canAccess()) {
			if (Auth::admin()->is_verified()) {
				return response()->json($this->respondWithToken($this->apiToken), 202);
			} else {
				Auth::logout();
				session()->invalidate();
				return response()->json(['message' => 'Unverified user'], 416);
			}
		} else {
			Auth::logout();
			session()->invalidate();
			return response()->json(['message' => 'Access Denied'], 401);
		}
		return redirect()->route(Admin::dashboardRoute());
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
		return Auth::guard('web');
	}

	protected function apiGuard()
	{
		return Auth::guard('jwt_api');
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
