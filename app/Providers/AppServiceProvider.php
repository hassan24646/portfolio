<?php

namespace App\Providers;

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
        try {
            if (config('database.default') === 'sqlite') {
                $dbPath = config('database.connections.sqlite.database');
                if ($dbPath && !file_exists($dbPath) && str_starts_with($dbPath, '/tmp/')) {
                    touch($dbPath);
                }
                if (!\Illuminate\Support\Facades\Schema::hasTable('contact_messages')) {
                    \Illuminate\Support\Facades\Artisan::call('migrate', ['--force' => true]);
                }
            }
        } catch (\Exception $e) {
            // Silence exceptions to prevent app crashes on boot
        }
    }
}
