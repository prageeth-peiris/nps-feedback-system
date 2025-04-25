<?php

namespace Repository\CustomerFeedBack;

use App\DTO\CustomerFeedbackDTO;
use App\DTO\DataTableDTO;
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

    public function test_it_retrieves_data_with_pagination()
    {

            CustomerFeedback::factory()->count(50)->create();

            $dataTableDTO = new DataTableDTO();

          $feedbacks = app(CustomerFeedBackRepositoryContract::class)->retrieve($dataTableDTO);

          $this->assertEquals( 10,$feedbacks->count());


    }


}
