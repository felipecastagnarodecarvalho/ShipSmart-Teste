<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\ContactRepository;
use \App\Services\ContactService;
use \App\Models\Contact;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ContactRepository::class, function ($app) {
            return new ContactRepository(new Contact());
        });

        // Bind the ContactService without manually creating an instance
        $this->app->bind(ContactService::class, function ($app) {
            return new ContactService($app->make(ContactRepository::class));
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
