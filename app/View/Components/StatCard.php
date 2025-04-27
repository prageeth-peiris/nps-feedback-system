<?php

namespace App\View\Components;

use App\Services\CustomerFeedback\CustomerFeedbackServiceContract;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class StatCard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public readonly  string $heading)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.stat-card');
    }

    public function calculateNPSScore():float{

        $service = app(CustomerFeedbackServiceContract::class);

        return $service->calculateNPSScore();

    }

}
