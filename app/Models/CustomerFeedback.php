<?php

namespace App\Models;

use Database\Factories\CustomerFeedBackFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerFeedback extends Model
{
    use HasFactory;

    protected $fillable = ['feedback_score', 'answer_to_follow_up_question', 'response_group'];

    protected static function newFactory(): CustomerFeedBackFactory
    {
        return new CustomerFeedbackFactory();
    }


}
