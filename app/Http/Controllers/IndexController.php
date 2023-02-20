<?php

namespace App\Http\Controllers;

class IndexController extends Controller
{
	public function index(): string
	{
		return 'Index Method';
	}

	public function store(): string
	{
		return 'Store Method';
	}
}
