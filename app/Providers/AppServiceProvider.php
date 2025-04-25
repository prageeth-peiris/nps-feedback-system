<?php

namespace App\Providers;

use App\Repositories\CustomerFeedback\CustomerFeedbackRepositoryContract;
use App\Repositories\CustomerFeedback\CustomerFeedBackRepositoryImplementation;
use App\Services\CustomerFeedback\CustomerFeedbackServiceContract;
use App\Services\CustomerFeedback\CustomerFeedbackServiceImplementation;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

       $this->app->bind(CustomerFeedbackRepositoryContract::class,CustomerFeedBackRepositoryImplementation::class);
       $this->app->bind(CustomerFeedBackServiceContract::class,CustomerFeedBackServiceImplementation::class);


    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
