<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('sap_no')->unique();
            $table->string('name');
            $table->integer('department_id');
            $table->string('gender');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.p
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff');
    }
}
