<?php

namespace Forms;

use App\Models\CustomerFeedback;
use Illuminate\Validation\ValidationException;
use Tests\TestCase;

class CustomerFeedbackFormTest extends TestCase
{


  public function test_it_stores_form_data_and_redirects_to_thank_you_page(){

      $test_data = [

          'feedback_score' => 5 ,
           'feedback_message' => 'Add more service'
      ];

   $response =  $this->post(route('create-customer-feedback'), $test_data);

      $response->assertSessionHasNoErrors();

   $response->assertRedirect(route('thank-you'));



   $this->assertDatabaseCount(CustomerFeedback::class, 1);

    $this->assertDatabaseHas(CustomerFeedback::class, [
        'feedback_score' => 5 ,
        'answer_to_follow_up_question' => 'Add more service'
    ]);

  }

  public function test_it_validates_feedback_form_request_data()
  {

      $test_data = [

          'feedback_score' => "" ,
          'feedback_message' => 'Add more service'
      ];


      $response =  $this->post(route('create-customer-feedback'), $test_data);

      $response->assertSessionHasErrors('feedback_score');

  }



}
