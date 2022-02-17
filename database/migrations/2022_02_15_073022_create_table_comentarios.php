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
        Schema::dropIfExists('comentarios');
        Schema::create('comentarios', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('articulo_id');
            $table->text('texto');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');

        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comentarios');
    }
};
