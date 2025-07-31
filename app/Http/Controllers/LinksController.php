<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLinksRequest;
use App\Http\Requests\UpdateLinksRequest;
use App\Models\Links;
use Illuminate\Support\Facades\Auth;

class LinksController extends Controller
{
    public function store(StoreLinksRequest $request)
    {

        Links::query()->create(
            array_merge(
                $request->validated(),
                ['user_id' => auth()->id()]
            )
        );

        return redirect()->intended('dashboard');
    }

    public function edit(Links $link)
    {
        return view('link.edit', compact('link'));
    }

    public function update(UpdateLinksRequest $request, Links $link)
    {
        $data = $request->validated();
        $link->fill($data)->save();

        return redirect()->route('dashboard')->with('success', 'Link atualizado com sucesso!');
    }

    public function destroy(Links $link)
    {
        $link->delete();

        return redirect()->route('dashboard')->with('success', 'Link removido com sucesso!');
    }

    public function up(Links $link)
    {
        $newOrder = $link->order;
        $swapWith = Links::query()->whereOrder($newOrder - 1)->first();
        $link->order = $swapWith->order;
        $link->save();

        $swapWith->order = $newOrder;
        $swapWith->save();
    }

    public function down(Links $link)
    {
        dd($link);
    }
}
