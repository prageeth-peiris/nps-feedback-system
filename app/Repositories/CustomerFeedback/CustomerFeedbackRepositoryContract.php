<?php

namespace App\Repositories\CustomerFeedback;

use App\DTO\CustomerFeedbackDTO;
use App\DTO\DataTableDTO;
use Illuminate\Support\Collection;

interface  CustomerFeedbackRepositoryContract
{


    public function save(CustomerFeedbackDTO $customerFeedbackDTO);

    public function retrieve(DataTableDTO $dataTableDTO):Collection;

}
