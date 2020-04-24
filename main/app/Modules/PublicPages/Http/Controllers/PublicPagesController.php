<?php

namespace App\Modules\PublicPages\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class PublicPagesController extends Controller
{
	public function __construct()
	{
		Inertia::setRootView('publicpages::app');
	}
	/**
	 * Display a listing of the resource.
	 * @return Response
	 */
	public function index(Request $request)
	{
		return Inertia::render('App', [
			'event' => $request->only(
				'id',
				'title',
				'start_date',
				'description'
			),
		]);
	}
}
