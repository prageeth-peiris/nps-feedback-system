<?php

namespace DataTable;

use App\DTO\CustomerFeedbackDTO;
use App\Models\CustomerFeedback;
use App\Models\User;
use Tests\TestCase;

class CustomerFeedbackDataTableTest extends TestCase
{


   public function test_it_retrieves_feedback_data_for_data_table(){
       // first simulate user has been logged in before the request is made
       $user = User::factory()->create();
       $this->actingAs($user);

        CustomerFeedback::factory()->count(10)->create();
        $response = $this->get(route('dashboard'));

        $response->assertStatus(200);

        //check html content has feedback score column
    $response->assertSeeText('Feedback Score');


   }


   public function test_it_filters_by_response_group_with_frontend_filter_form(){

       // first simulate user has been logged in before the request is made
       $user = User::factory()->create();
       $this->actingAs($user);

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

       // we have written special mapping to map response_group parameter to DataTableDTO filters format
       $response = $this->get(route('dashboard',[

           'response_group' => 'Detractor'
       ]));

       $response->assertStatus(200);

       // as we filter Detractors there can not be Promoter records
       //but we can not just check Promoters text as in the filters dropdown there it can be.
       //so we have to check a table record in html
       $response->assertDontSee('<td class="py-3 px-6 text-left">Promoter</td>');

   }


}
