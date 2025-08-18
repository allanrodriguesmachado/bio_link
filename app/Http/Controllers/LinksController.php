<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\{JsonResponse, RedirectResponse, Request};
use Illuminate\Support\Facades\Auth;
use JetBrains\PhpStorm\NoReturn;
use App\Http\Requests\{StoreLinksRequest, UpdateLinksRequest};
use App\Models\{Links};

class LinksController extends Controller
{
    public function store(StoreLinksRequest $request): RedirectResponse
    {
        Links::query()->create(
            array_merge(
                $request->validated(),
                ['user_id' => auth()->id()]
            )
        );

        return redirect()->intended('dashboard');
    }

    /**
     * @throws AuthorizationException
     */
    public function edit(Links $link): View|Application|Factory
    {
        $this->authorize('update', $link);

        return view('link.edit', compact('link'));
    }

    #[NoReturn] public function update(UpdateLinksRequest $request, Links $link): RedirectResponse
    {
        if ($link->user()->is(Auth::user()) !== true) {
            return back()->with([
                'url-alter' => 'Atenção: você não tem permissão para acessar este link.',
            ]);
        }

        $data = $request->validated();
        $link->fill($data)->save();

        return redirect()->route('dashboard')->with('success', 'Link atualizado com sucesso!');
    }

    public function destroy(Links $link): RedirectResponse
    {
        $link->delete();

        return redirect()->route('dashboard')->with('success', 'Link removido com sucesso!');
    }

    public function up(Links $link): RedirectResponse
    {
        $link->moveUp();

        return back();
    }

    public function down(Links $link): RedirectResponse
    {
        $link->moveDown();

        return back();
    }

    public function reorder(Links $link, Request $request): JsonResponse
    {
        $link->upAndDown($request);

        return response()->json(['status' => 'success']);
    }
}
