<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLinksRequest;
use App\Http\Requests\UpdateLinksRequest;
use App\Models\Links;
use Illuminate\Support\Facades\Auth;

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

    public function show(Links $links)
    {
        //
    }

    public function edit(Links $link)
    {
        return view('link.edit', compact('link'));
    }

    public function update(UpdateLinksRequest $request, Links $link)
    {
        $data = $request->validated();
        $data['user_id'] = Auth::id();

        $link->update($data);

        return redirect()->route('dashboard')->with('success', 'Link atualizado com sucesso!');
    }

    public function destroy(Links $links)
    {
        //
    }
}
