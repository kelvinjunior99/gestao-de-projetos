<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('projetos', function (Blueprint $table) {
            $table->string('tipo')->default('simples')->after('estado')->nullable();
            $table->string('visibilidade')->default('publico')->after('tipo')->nullable();
            $table->string('github')->after('visibilidade')->nullable();
            $table->date('data_final')->after('github')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('projetos', function (Blueprint $table) {
            $table->dropColumn('outros');
        });
    }
};
