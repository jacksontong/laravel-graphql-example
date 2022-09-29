<?php

namespace App\GraphQL\Mutations;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

final class Logout
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args): ?User
    {
        $guard = Auth::guard('web');

        /** @var User|null $user */
        $user = $guard->user();
        $guard->logout();

        return $user;
    }
}
