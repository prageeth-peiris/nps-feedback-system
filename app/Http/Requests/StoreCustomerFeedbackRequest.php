<?php

namespace App\Http\Requests;

use App\DTO\CustomerFeedbackDTO;

class StoreCustomerFeedbackRequest extends BaseFormRequest
{
    public function rules(): array
    {
        return [
            'feedback_score' => 'required | numeric | min:0 | max:10',
            'feedback_message' => 'sometimes | string | max:65000',
        ];
    }

    public function getValidatedData(): CustomerFeedbackDTO
    {

        $this->validate();

        return new CustomerFeedbackDTO(
            feedback_score: $this->request->post('feedback_score'),
            answer_to_follow_up_question: $this->request->post('feedback_message'),
        );

    }
}
