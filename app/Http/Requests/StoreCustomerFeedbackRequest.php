<?php

namespace App\Http\Requests;

use App\DTO\CustomerFeedbackDTO;
use Illuminate\Foundation\Http\FormRequest;

class StoreCustomerFeedbackRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'feedback_score' => 'required| numeric | min:0 | max:10',
            'feedback_message' => 'sometimes | string | max:65000',
        ];
    }


    public function getValidatedData(): CustomerFeedbackDTO {

        $this->validate($this->rules());

        return new CustomerFeedbackDTO(
            feedback_score: $this->post('feedback_score'),
            answer_to_follow_up_question: $this->post('feedback_message'),
        );

    }

}
