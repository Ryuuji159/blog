<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMorePublishedRows extends Migration
{
    public function up()
    {
        Schema::table('now', function (Blueprint $table) {
            $table->boolean('is_published')
                  ->after('md')
                  ->default(false);
        });
        Schema::table('projects', function (Blueprint $table) {
            $table->boolean('is_published')
                  ->after('md')
                  ->default(false);
        });
        Schema::table('setups', function (Blueprint $table) {
            $table->boolean('is_published')
                  ->after('md')
                  ->default(false);
        });
    }

    public function down()
    {
        Schema::table('now', function (Blueprint $table) {
            $table->dropColumn('is_published');
        });
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn('is_published');
        });
        Schema::table('setups', function (Blueprint $table) {
            $table->dropColumn('is_published');
        });
    }
}
