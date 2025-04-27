<?php

namespace App\Repositories\CustomerFeedback;

use App\DTO\CustomerFeedbackDTO;
use App\DTO\DataTableDTO;
use Illuminate\Support\Collection;

interface CustomerFeedbackRepositoryContract
{
    public function save(CustomerFeedbackDTO $customerFeedbackDTO);

    public function retrieve(DataTableDTO $dataTableDTO): Collection;

    // this will return count feedbacks of each responseGroup. sample will be lke this
    // [
    //  ["response_group" => "Promoter" , "total" => 3] ,
    //  ["response_group" => "Passive" , "total" => 3] ,
    //
    // ]
    public function countOfFeedbacksOfEachResponseGroup(): Collection;

    public function retrieveCount(DataTableDTO $dataTableDTO): int;
}
