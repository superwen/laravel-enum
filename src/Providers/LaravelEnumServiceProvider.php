<?php

namespace Superwen\LaravelEnum\Providers;

use Illuminate\Support\ServiceProvider;
use Superwen\LaravelEnum\Console\Commands\EnumMakeCommand;

/**
 * The Laravel Enum service provider.
 *
 */
class LaravelEnumServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                EnumMakeCommand::class,
            ]);
        }
    }
}
