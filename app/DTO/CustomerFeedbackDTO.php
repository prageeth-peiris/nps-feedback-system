<?php

namespace App\DTO;

class CustomerFeedbackDTO extends BaseDataTransferObject {

// uses constructor property promotion
public function __construct(
    public int $feedback_score,
    public string $answer_to_follow_up_question
){
}


public function getResponseGroup():string{

    $score = $this->feedback_score;

    if($score >= 9 && $score <= 10){
            return "Promoter";
    }

    if($score >= 7 && $score <= 8){
        return "Passive";
}

if($score >= 0 && $score <= 6){
    return "Detractor";
}


throw new \Exception("Invalid Feedback score to define the response group");


}


// this can be used for persisting data in  database
public function toArray(): array {

    return [

        'feedback_score' => $this->feedback_score,
        'answer_to_follow_up_question' => $this->answer_to_follow_up_question,
        'response_group' => $this->getResponseGroup()


    ];

}




}
