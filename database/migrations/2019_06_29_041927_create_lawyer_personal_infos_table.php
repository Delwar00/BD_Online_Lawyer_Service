<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLawyerPersonalInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('lawyer_personal_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user-id');
            $table->string('l_name');
            $table->date('l_birth')->nullable();
            // $table->string('nid_num',150);
            $table->integer('gender');
            $table->string('religion');
            $table->string('highest_degree')->default("nai");
            $table->integer('maritual_status');
            $table->longText('details');
            $table->string('price');
            $table->string('profile_photo')->default('profile_photos/defaltimage.jpg');
            $table->integer('l_p_status')->default(1);
            $table->longText('qualifications');
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
        Schema::dropIfExists('lawyer_personal_infos');
    }
}
