<?php

namespace Database\Seeders;

use App\Models\Links;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class LinksSeeder extends Seeder
{
    public function run(): void
    {
        User::all()->each(function ($user) {
            Links::factory(10)->create(
                ['user_id' => $user->id]
            );
        });
    }
}
