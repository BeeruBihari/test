<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PluginProblemSuggestationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plugin_problem_suggestation_table', function (Blueprint $table) {
            $table->increments('p_p_s_id');
            $table->string('my_clint_id');
            $table->string('package_id');
            $table->string('problem_or_suggestation');
            $table->string('type');
            
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
        Schema::dropIfExists('plugin_problem_suggestation_table');
    }
}
