<?php

namespace App\Services\Charts;

use App\DTO\ChartDataDTO;
use App\Repositories\CustomerFeedback\CustomerFeedbackRepositoryContract;

class ChartServiceImplementation implements ChartServiceContract
{
    public function __construct(
        public readonly CustomerFeedbackRepositoryContract $customerFeedbackRepository
    ) {}

    public function countOfFeedbacksOfEachResponseGroup(): ChartDataDTO
    {

        $data = $this->customerFeedbackRepository->countOfFeedbacksOfEachResponseGroup();

        return new ChartDataDTO(labels: $data->pluck('response_group')->toArray(),
            dataSets: $data->pluck('total')->toArray(), labelName: 'No of Feedback Count'

        );

    }
}
