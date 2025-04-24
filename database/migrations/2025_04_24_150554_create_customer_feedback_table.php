<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customer_feedback', function (Blueprint $table) {
            $table->id();
            $table->smallInteger('feedback_score');
            $table->text('answer_to_follow_up_question')->nullable(); // this can be a large answer from customer so text can hold 65 000 chars
            $table->char('response_group', 50);  //  response group  can be promoters , passives , detractors according to feedback score
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_feedback');
    }
};
