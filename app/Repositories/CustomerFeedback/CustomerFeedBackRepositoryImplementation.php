<?php

namespace App\Repositories\CustomerFeedback;

use App\DTO\CustomerFeedbackDTO;
use App\Models\CustomerFeedback;

class CustomerFeedBackRepositoryImplementation implements CustomerFeedbackRepositoryContract
{
    public function save(CustomerFeedbackDTO $customerFeedbackDTO): void
    {

        CustomerFeedback::create($customerFeedbackDTO->toArray());



    }


}
