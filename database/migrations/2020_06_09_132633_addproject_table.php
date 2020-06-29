<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddprojectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addproject', function (Blueprint $table) {
            $table->id('project_id');
            $table->string('project_name');
            $table->string('des_project');
            $table->string('facebook');
            $table->string('email');
            $table->string('phone');
            $table->string('type_project');
            $table->string('genre_project');
            $table->string('category_project');
            $table->string('branch_project');
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
        Schema::dropIfExists('addproject');
    }
}
