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
               ->where($dataTableDTO->filters)
            ->orderBy($dataTableDTO->sortingColumn,$dataTableDTO->sortingDirection)
            ->limit($dataTableDTO->limit)
            ->offset($dataTableDTO->offset)
            ->get()
            ;


    }


}
