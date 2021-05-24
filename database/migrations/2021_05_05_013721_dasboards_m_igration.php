<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DasboardsMIgration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dasboards', function (Blueprint $table) {
            $table->string('id');
            $table->string('jobid');
            $table->string('user');
            $table->string('name_job');
            $table->string('state');
            $table->string('n_node');
            $table->string('node_list');
            $table->string('cpus');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dasboards');
    }
}
