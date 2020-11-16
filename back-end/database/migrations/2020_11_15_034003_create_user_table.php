<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::update('user', function (Blueprint $table) {
            $table->id()->unique();
            $table->string("name", 60)->nullable(false);
            $table->date("age")->nullable(false);
            $table->string("address", 300)->nullable(false);
            $table->string("cpf", 11);
            $table->string("cnpj", 14);
            $table->string("rg", 11);
            $table->string("doc_type", 60)->nullable(false);
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
        Schema::dropIfExists('user');
    }
}
