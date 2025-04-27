<?php

namespace App\Services\Charts;

use App\DTO\ChartDataDTO;

interface ChartServiceContract
{
    // this must implement the data for bar chart format of chart js
    public function countOfFeedbacksOfEachResponseGroup(): ChartDataDTO;
}
