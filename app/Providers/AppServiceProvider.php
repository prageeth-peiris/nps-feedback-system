<?php

namespace App\Providers;

use App\Repositories\CustomerFeedback\CustomerFeedbackRepositoryContract;
use App\Repositories\CustomerFeedback\CustomerFeedBackRepositoryImplementation;
use App\Repositories\User\UserRepositoryContract;
use App\Repositories\User\UserRepositoryImplementation;
use App\Services\Charts\ChartServiceContract;
use App\Services\Charts\ChartServiceImplementation;
use App\Services\CustomerFeedback\CustomerFeedbackServiceContract;
use App\Services\CustomerFeedback\CustomerFeedbackServiceImplementation;
use App\Services\DataTable\CSVExporter;
use App\Services\DataTable\DataExporterContract;
use App\Services\User\UserServiceContract;
use App\Services\User\UserServiceImplementation;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

        $this->app->bind(CustomerFeedbackRepositoryContract::class, CustomerFeedBackRepositoryImplementation::class);
        $this->app->bind(CustomerFeedBackServiceContract::class, CustomerFeedBackServiceImplementation::class);
        $this->app->bind(ChartServiceContract::class, ChartServiceImplementation::class);
        $this->app->bind(UserRepositoryContract::class, UserRepositoryImplementation::class);
        $this->app->bind(UserServiceContract::class, UserServiceImplementation::class);
        $this->app->bind(DataExporterContract::class, CSVExporter::class);

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
