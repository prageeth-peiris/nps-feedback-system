<?php

namespace App\Services\CustomerFeedback;

use App\DTO\CustomerFeedbackDTO;
use App\DTO\DataTableDTO;
use App\Repositories\CustomerFeedback\CustomerFeedbackRepositoryContract;
use Illuminate\Support\Collection;

class CustomerFeedbackServiceImplementation implements CustomerFeedbackServiceContract
{
    public function __construct(
        private readonly CustomerFeedbackRepositoryContract $customerFeedbackRepository
    ) {}

    public function save(CustomerFeedbackDTO $customerFeedbackDTO): void
    {
        $this->customerFeedbackRepository->save($customerFeedbackDTO);

    }

    public function retrieve(DataTableDTO $dataTableDTO): Collection
    {
        return $this->customerFeedbackRepository->retrieve($dataTableDTO);
    }

    public function retrieveCount(DataTableDTO $dataTableDTO): int
    {
        return $this->customerFeedbackRepository->retrieveCount($dataTableDTO);
    }

    public function calculateNPSScore(): float
    {
        $defaultDataTableDTO = new DataTableDTO;
        $promoter_filter = app(DataTableDTO::class);
        $detractor_filter = app(DataTableDTO::class);

        $promoter_filter->setFilters([['response_group', '=', 'Promoter']]);
        $detractor_filter->setFilters([['response_group', '=', 'Detractor']]);

        $total = $this->customerFeedbackRepository->retrieveCount($defaultDataTableDTO);
        $promoters_count = $this->customerFeedbackRepository->retrieveCount($promoter_filter);
        $detractor_count = $this->customerFeedbackRepository->retrieveCount($detractor_filter);

        $nps_score = ($promoters_count * 100 / $total) - ($detractor_count * 100 / $total);

        return round($nps_score, 2);
    }
}
