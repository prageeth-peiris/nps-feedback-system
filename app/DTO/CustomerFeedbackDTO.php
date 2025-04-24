<?php

namespace App\DTO;

class CustomerFeedbackDTO extends BaseDataTransferObject {


public function __construct(
    public int $feedback_score,
    public string $answer_to_follow_up_question,
    public string  $response_group
){
}




}
