<?php

namespace App\Repositories\CustomerFeedback;

use App\DTO\CustomerFeedbackDTO;

interface  CustomerFeedbackRepositoryContract
{


    public function save(CustomerFeedbackDTO $customerFeedbackDTO);



}
