<?php

namespace App\Policies;

use App\Models\{User, Links};
class LinkPolicy
{
    public function update(User $user, Links $link): bool
    {
       return $link->user()->is($user);
   }
}
