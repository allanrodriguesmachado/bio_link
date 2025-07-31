<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use JetBrains\PhpStorm\NoReturn;
use App\Http\Requests\{StoreLinksRequest, UpdateLinksRequest};
use App\Models\{Links, User};

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

    #[NoReturn] public function update(UpdateLinksRequest $request, Links $link)
    {
//        dd($this->authorize('update', $link));
        if ($link->user()->is(Auth::user()) !== true) {
            return back()->with([
                'url-alter' => 'Atenção: você não tem permissão para acessar este link.',
            ]);
        }

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
        $link->moveUp();

        return back();
    }

    public function down(Links $link)
    {
        $link->moveDown();

        return back();
    }
}
