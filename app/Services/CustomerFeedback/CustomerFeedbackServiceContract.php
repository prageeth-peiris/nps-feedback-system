<?php

namespace App\Services\CustomerFeedback;

use App\DTO\CustomerFeedbackDTO;
use App\DTO\DataTableDTO;
use Illuminate\Support\Collection;

interface CustomerFeedbackServiceContract
{
    public function save(CustomerFeedbackDTO $customerFeedbackDTO);

    public function retrieve(DataTableDTO $dataTableDTO): Collection;

    public function retrieveCount(DataTableDTO $dataTableDTO): int;

    public function calculateNPSScore() : float;
}
