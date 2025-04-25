<?php

namespace Repository\CustomerFeedBack;

use App\DTO\CustomerFeedbackDTO;
use App\Models\CustomerFeedback;
use App\Repositories\CustomerFeedback\CustomerFeedbackRepositoryContract;
use Tests\TestCase;

class CustomerFeedbackRespositoryTest extends TestCase
{


   public function test_it_persists_data_to_the_database()
   {



       $customerFeedBackData = new CustomerFeedbackDTO(
           feedback_score: 6,answer_to_follow_up_question: "Add a Hot Line Number"
       );


        app(CustomerFeedbackRepositoryContract::class)->save($customerFeedBackData);

        $this->assertDatabaseCount(CustomerFeedback::class,1);

        $this->assertDatabaseHas(CustomerFeedback::class,[

            "feedback_score" => 6,
            "answer_to_follow_up_question" => "Add a Hot Line Number",
            "response_group" => "Detractor"
        ]);


   }




}
