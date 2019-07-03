<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBaseDb extends Migration
{
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->longText('md');
            $table->timestamps();
        });

        Schema::create('now', function(Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('md');
            $table->timestamps();
        });

        Schema::create('projects', function(Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->longText('md');
            $table->timestamps();
        });

        Schema::create('projects_photos', function(Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('project_id')->unsigned();
            $table->foreign('project_id')->references('id')->on('projects');
            $table->string('filename');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('projects_photos');
        Schema::dropIfExists('projects');
        Schema::dropIfExists('now');
        Schema::dropIfExists('posts');
    }
}
