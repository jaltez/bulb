<?php

namespace App\Providers;

use App\Models\Chat;
use App\Models\Message;
use App\Models\User;
use Carbon\CarbonImmutable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // HTTP
        if ($this->app->environment('production')) {
            URL::forceScheme('https');
        }

        // Dates
        Date::use(CarbonImmutable::class);

        // Eloquent
        Model::shouldBeStrict();

        Relation::requireMorphMap();

        Relation::morphMap([
            'user' => User::class,
            'chat' => Chat::class,
            'message' => Message::class,
        ]);
    }
}
