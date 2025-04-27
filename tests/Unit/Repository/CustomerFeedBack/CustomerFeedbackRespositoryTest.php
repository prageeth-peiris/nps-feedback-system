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


    public function test_it_filters_customer_feedback_by_feedback_score()
    {

        //insert 3 records
            CustomerFeedback::factory()->create(

                (new CustomerFeedbackDTO(feedback_score: 6))->toArray()

            );

        CustomerFeedback::factory()->create(

            (new CustomerFeedbackDTO(feedback_score: 2))->toArray()

        );

        CustomerFeedback::factory()->create(

            (new CustomerFeedbackDTO(feedback_score: 9))->toArray()

        );



        $dataTableDTO = new DataTableDTO(
            filters: [

                ['feedback_score', '>',5]
            ]
        );

      $results =   app(CustomerFeedbackRepositoryContract::class)->retrieve($dataTableDTO);

      $this->assertEquals(2,$results->count());

    }


    public function test_it_retrieves_count_of_total_feedbacks_of_each_response_group()
    {

        CustomerFeedback::factory()->create(

            (new CustomerFeedbackDTO(feedback_score: 6))->toArray()

        );

        CustomerFeedback::factory()->create(

            (new CustomerFeedbackDTO(feedback_score: 2))->toArray()

        );

        CustomerFeedback::factory()->create(

            (new CustomerFeedbackDTO(feedback_score: 9))->toArray()

        );

        CustomerFeedback::factory()->create(

            (new CustomerFeedbackDTO(feedback_score: 10))->toArray()

        );

        CustomerFeedback::factory()->create(

            (new CustomerFeedbackDTO(feedback_score: 10))->toArray()

        );


        $results =   app(CustomerFeedbackRepositoryContract::class)->countOfFeedbacksOfEachResponseGroup();


        $this->assertEquals([
            ['response_group' => 'Promoter','total' => 3] ,
            ['response_group' => 'Detractor','total' => 2],

        ],$results->toArray());

    }


}
