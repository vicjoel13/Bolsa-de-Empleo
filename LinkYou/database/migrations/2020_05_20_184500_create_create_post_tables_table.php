<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreatePostTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('create_post_tables', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('company');
            $table->string('time_type');
            $table->string('logo');
            $table->string('URL');
            $table->string('position');
            $table->string('location');
            $table->string('job_category');
            $table->text('description');
            $table->string('email');
            $table->string('application');
            $table->unsignedBigInteger('id_company');
            $table->boolean('isActive')->default('1');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('create_post_tables');
    }
}
