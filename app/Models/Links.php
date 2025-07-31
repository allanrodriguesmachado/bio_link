<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Links extends Model
{
    /** @use HasFactory<\Database\Factories\LinksFactory> */
    use HasFactory;

    protected $guarded = [];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function moveUp(): void
    {
        $this->move('up');
    }

    public function moveDown(): void
    {
        $this->move('down');
    }

    private function move(string $to): void
    {
        $step = $to === 'up' ? -1 : 1;

        $order = $this->sort;
        $newOrder = $order + $step;

        /**
         * @var User $user
         */
        $user = auth()->user();

        $swapWith = $user->links()->first();

        $this->fill([
            'sort' => $newOrder,
        ])->save();

        $swapWith->fill([
            'sort' => $order,
        ])->save();

    }
}
