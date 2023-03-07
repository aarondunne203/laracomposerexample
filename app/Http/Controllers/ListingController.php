<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class ListingController extends Controller
{

	public function __construct()
	{
		$this->authorizeResource(Listing::class, 'listing');
	}


	/**
	 * Display a listing of the resource.
	 */
	public function index(Request $request): Response
	{
		//
		$filters = $request->only([
			'priceFrom', 'priceTo', 'numOfBeds', 'numOfBaths', 'areaFrom', 'areaTo',
		]);

		return Inertia::render(
			'Listing/Index',
			[
				'listings' => Listing::mostRecent()
					->filterBy($filters)
					->paginate(10)
					->withQueryString(),
				'filters' => $filters
			]
		);
	}

	/**
	 * Show the form for creating a new resource.
	 */
	public function create(): Response
	{
		//
		return Inertia::render(
			'Listing/Create'
		);
	}

	/**
	 * Store a newly created resource in storage.
	 */
	public function store(Request $request)
	{


		$request->user()->listings()->create(
			$request->validate([
				'beds' => 'required|integer|min:0|max:20',
				'baths' => 'required|integer|min:0|max:20',
				'area' => 'required|integer|min:15|max:2000',
				'city' => 'required',
				'code' => 'required',
				'street' => 'required',
				'street_number' => 'required|integer|min:1|max:1000',
				'price' => 'required|integer|min:1|max:200000000'
			])
		);

		return redirect()
			->route('listing.index')
			->with('success', 'Listing was created');
	}

	/**
	 * Display the specified resource.
	 */
	public function show(Listing $listing): Response
	{
		//

		return Inertia::render(
			'Listing/Show',
			[
				'listing' => $listing
			]
		);
	}

	/**
	 * Show the form for editing the specified resource.
	 */
	public function edit(Listing $listing): Response
	{
		return Inertia::render(
			'Listing/Edit',
			[
				'listing' => $listing
			]);
	}

	/**
	 * Update the specified resource in storage.
	 */
	public function update(Request $request, Listing $listing): RedirectResponse
	{
		$listing->update(
//			...$request->all(),
			$request->validate([
				'beds' => 'required|integer|min:0|max:20',
				'baths' => 'required|integer|min:0|max:20',
				'area' => 'required|integer|min:15|max:2000',
				'city' => 'required',
				'code' => 'required',
				'street' => 'required',
				'street_number' => 'required|integer|min:1|max:1000',
				'price' => 'required|integer|min:1|max:200000000'
			])
		);

		return redirect()->route('listing.index')
			->with('success', 'Listing was updated');
	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy(Listing $listing): RedirectResponse
	{
		//
		$listing->delete();

		return redirect()
			->back()
			->with('success', 'Listing deleted successfully');
	}
}
