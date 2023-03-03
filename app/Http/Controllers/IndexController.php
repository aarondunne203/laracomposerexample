<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

class IndexController extends Controller
{
	public function index(): Response
	{
//		dd(\Auth::user());
//		dd(\Auth::check());

		return Inertia::render(
			'Index/Index',
			[
				'message' => 'test'
			]
		);
	}

	public function show(): Response
	{
		return Inertia::render('Index/Show');
	}
}
