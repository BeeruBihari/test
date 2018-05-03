<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ClintRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clint_role_table', function (Blueprint $table) {
            $table->integer('parent_clint_id');
            //$table->foreign('parent_clint_id', 'fk_1_parent_clint_id')->references('parent_clint_id')->on('parent_clint_list_table');
            $table->increments('clint_id');
            $table->string('clint_password');
            $table->string('role_name');
            $table->string('package_list_json');
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
        Schema::dropIfExists('clint_role_table');
    }
}
