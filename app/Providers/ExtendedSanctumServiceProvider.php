<?php

namespace App\Providers;

use App\Guards\SanctumGuard;
use Illuminate\Auth\RequestGuard;
use Illuminate\Support\Facades\Log;
use Laravel\Sanctum\SanctumServiceProvider;

class ExtendedSanctumServiceProvider extends SanctumServiceProvider
{
    /**
     * Register the guard.
     *
     * @param  \Illuminate\Contracts\Auth\Factory  $auth
     * @param  array  $config
     * @return RequestGuard
     */
    protected function createGuard($auth, $config)
    {
        return new RequestGuard(
            new SanctumGuard($auth, config('sanctum.expiration'), $config['provider']),
            request(),
            $auth->createUserProvider($config['provider'] ?? null)
        );
    }
}