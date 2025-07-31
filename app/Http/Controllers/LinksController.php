<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLinksRequest;
use App\Http\Requests\UpdateLinksRequest;
use App\Models\Links;
use App\Models\User;
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
        $order = $link->sort;
        $newOrder = $order - 1;

        /**
         * @var User $user
         */
        $user = auth()->user();

        $swapWith = $user->links();

        $link->fill([
            'sort' => $newOrder,
        ])->save();

        $swapWith->fill([
            'sort' => $order,
        ])->save();

        return back();
    }

    public function down(Links $link)
    {
        dd($link);
    }
}
