<?php

namespace Service\CustomerFeedback;

use App\Models\CustomerFeedback;
use App\Services\CustomerFeedback\CustomerFeedbackServiceContract;
use Tests\TestCase;

class CustomerFeedbackServiceTest extends TestCase
{

    public function test_it_calculates_nps_score()
    {

      $service = app(CustomerFeedbackServiceContract::class);

      CustomerFeedback::factory()->count(25)->create([
          'response_group' => "Promoter"
      ]);

        CustomerFeedback::factory()->count(40)->create([
            'response_group' => "Detractor"
        ]);

        $nps_score = $service->calculateNPSScore();

        $this->assertEquals(-23,round($nps_score,0));

    }

}
