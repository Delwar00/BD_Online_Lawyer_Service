<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLawyerPracticesAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lawyer_practices_areas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user-id')->comment('foriegn key');
            $table->integer('lawyer_personal_info_id')->comment('foriegn key');
            $table->string('prac_area');
            // $table->longText('experience');
            $table->integer('add_status')->default(1);
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
        Schema::dropIfExists('lawyer_practices_areas');
    }
}
