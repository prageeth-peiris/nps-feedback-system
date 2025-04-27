<?php

namespace App\View\Components\Charts;

use App\DTO\ChartDataDTO;
use App\Services\Charts\ChartServiceContract;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BarChart extends Component
{
    public ChartDataDTO $chartData;

    /**
     * Create a new component instance.
     */
    public function __construct(ChartServiceContract $chartService)
    {
        $this->chartData = $chartService->countOfFeedbacksOfEachResponseGroup();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.charts.bar-chart');
    }
}
