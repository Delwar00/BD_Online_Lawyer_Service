<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLawyerFeedbackMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lawyer_feedback_messages', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->integer('personal_info_id')->comment('foriegn key');
          $table->integer('user_id')->comment('foriegn key');
          $table->longText('message');
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lawyer_feedback_messages');
    }
}
