<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car', function (Blueprint $table) {
            $table->id()->unique();
            $table->string("name", 60)->nullable(false);
            $table->string("board", 7)->nullable(false);
            $table->string("model", 20)->nullable(false);
            $table->string("mark", 10)->nullable(false);
            $table->string("color", 10)->nullable(false);
            $table->foreignId("user_id")->constrained("user")->cascadeOnDelete();
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
        Schema::dropIfExists('car');
    }
}
