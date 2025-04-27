<?php

namespace Service\Charts;

use App\DTO\ChartDataDTO;
use App\DTO\CustomerFeedbackDTO;
use App\Models\CustomerFeedback;
use App\Services\Charts\ChartServiceContract;
use Tests\TestCase;

class ChartServiceTest extends TestCase
{
    public function test_it_returns_chart_data_of_count_of_total_feedback_of_each_response_group()
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

        /** @var ChartDataDTO $data */
        $data = app(ChartServiceContract::class)->countOfFeedbacksOfEachResponseGroup();

        $this->assertEquals(['Promoter', 'Detractor'], $data->labels);

        $this->assertEquals([3, 2], $data->dataSets);

    }
}
