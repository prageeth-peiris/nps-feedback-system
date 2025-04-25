<?php

namespace App\Providers;

use App\Repositories\CustomerFeedback\CustomerFeedbackRepositoryContract;
use App\Repositories\CustomerFeedback\CustomerFeedBackRepositoryImplementation;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

       $this->app->bind(CustomerFeedbackRepositoryContract::class,CustomerFeedBackRepositoryImplementation::class);


    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
