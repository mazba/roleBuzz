<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserPermission extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_group_permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uri');
            $table->string('methods');
            $table->string('namespace');
            $table->string('controller');
            $table->string('action');
            $table->string('prefix');
            $table->integer('created_by')->nullable();
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
        Schema::dropIfExists('sys_group_permissions');
    }
}
