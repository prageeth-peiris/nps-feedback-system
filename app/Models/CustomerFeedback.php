<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerFeedback extends Model
{
    protected $fillable = ['feedback_score', 'answer_to_follow_up_question', 'response_group'];
}
