<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLinksRequest;
use App\Http\Requests\UpdateLinksRequest;
use App\Models\Links;

class LinksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLinksRequest $request)
    {

        Links::query()->create(
            array_merge(
                $request->validated(),
                ['user_id' => auth()->id()]
            )
//            $request->validated()
        );

        return redirect()->intended('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Links $links)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Links $links)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLinksRequest $request, Links $links)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Links $links)
    {
        //
    }
}
