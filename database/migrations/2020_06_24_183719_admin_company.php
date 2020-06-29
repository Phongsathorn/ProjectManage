<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdminCompany extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('admin_company', function (Blueprint $table) {
            $table->id('admin_company_id');
            $table->string('admin_company_user');
            $table->string('admin_company_pass');
            $table->string('admin_company_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('admin_company');
    }
}
