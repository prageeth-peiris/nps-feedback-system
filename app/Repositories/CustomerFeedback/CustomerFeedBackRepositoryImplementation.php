<?php

namespace App\Repositories\CustomerFeedback;

use App\DTO\CustomerFeedbackDTO;
use App\DTO\DataTableDTO;
use App\Models\CustomerFeedback;
use Illuminate\Support\Collection;

class CustomerFeedBackRepositoryImplementation implements CustomerFeedbackRepositoryContract
{
    public function save(CustomerFeedbackDTO $customerFeedbackDTO): void
    {

        CustomerFeedback::create($customerFeedbackDTO->toArray());

    }

    public function retrieve(DataTableDTO $dataTableDTO): Collection
    {

        return CustomerFeedback::query()
            ->where($dataTableDTO->getFilters())
            ->orderBy($dataTableDTO->sortingColumn, $dataTableDTO->sortingDirection)
            ->limit($dataTableDTO->limit)
            ->offset($dataTableDTO->offset)
            ->get();

    }

    public function countOfFeedbacksOfEachResponseGroup(): Collection
    {
        return CustomerFeedback::query()
            ->selectRaw('response_group,count(*) as total')
            ->groupBy('response_group')
            ->orderBy('total', 'desc')
            ->get();
    }
}
