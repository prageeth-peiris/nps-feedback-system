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


}
