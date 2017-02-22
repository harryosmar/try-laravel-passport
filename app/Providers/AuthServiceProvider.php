<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        /**
         * This method will register the routes necessary to issue access tokens and revoke access tokens, clients, and personal access tokens
         */
        Passport::routes();

        /**
         * By default, Passport issues long-lived access tokens that never need to be refreshed.
         * If you would like to configure a shorter token lifetime
         */
        Passport::tokensExpireIn(Carbon::now()->addDays(15));
        Passport::refreshTokensExpireIn(Carbon::now()->addDays(30));

        /**
         * Defining Scopes
         * Scopes allow your API clients to request a specific set of permissions when requesting authorization to access an account.
         * For example, if you are building an e-commerce application, not all API consumers will need the ability to place orders.
         * Instead, you may allow the consumers to only request authorization to access order shipment statuses.
         * In other words, scopes allow your application's users to limit the actions a third-party application can perform on their behalf.
         */
        Passport::tokensCan([
            'place-orders' => 'Place orders',
            'check-status' => 'Check order status',
        ]);

        /**
         * Implicit Grant Tokens
         * The implicit grant is similar to the authorization code grant; however, the token is returned to the client without exchanging an authorization code.
         * This grant is most commonly used for JavaScript or mobile applications where the client credentials can't be securely stored
         */
        Passport::enableImplicitGrant();
    }
}
