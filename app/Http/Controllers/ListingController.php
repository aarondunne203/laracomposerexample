<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class ListingController extends Controller
{
	/**
	 * Display a listing of the resource.
	 */
	public function index(): Response
	{
		//
		return Inertia::render(
			'Listing/Index',
			[
				'listings' => Listing::all()
			]
		);
	}

//	/**
//	 * Show the form for creating a new resource.
//	 */
//	public function create(): Response
//	{
//		//
//		r;
//	}
//
//	/**
//	 * Store a newly created resource in storage.
//	 */
//	public function store(Request $request): RedirectResponse
//	{
//		//
//	}

	/**
	 * Display the specified resource.
	 */
	public function show(Listing $listing): Response
	{
		//
		return Inertia::render(
			'Listing/Index',
			[
				'listing' => $listing
			]
		);
	}

//	/**
//	 * Show the form for editing the specified resource.
//	 */
//	public function edit(string $id): Response
//	{
//		//
//	}
//
//	/**
//	 * Update the specified resource in storage.
//	 */
//	public function update(Request $request, string $id): RedirectResponse
//	{
//		//
//	}
//
//	/**
//	 * Remove the specified resource from storage.
//	 */
//	public function destroy(string $id): RedirectResponse
//	{
//		//
//	}
}
