<?php

namespace Database\Factories;

use App\DTO\CustomerFeedbackDTO;
use App\Models\CustomerFeedback;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFeedBackFactory extends Factory
{

    protected $model = CustomerFeedBack::class;

    public function definition(): array
    {


        $dto = new CustomerFeedbackDTO(
            feedback_score: fake()->numberBetween(0,10),
            answer_to_follow_up_question: fake()->sentence(2,true),

        );

        return $dto->toArray();

    }


}
