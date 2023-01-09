<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('category_id');
            $table->string('accordion_name');
            $table->integer('accordion_group');
            $table->integer('position');
            $table->string('name');
            $table->string('description');
            $table->string('revision');
            $table->string('file');
            $table->enum('status', ['Rozpracováno', 'Schváleno']);
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
        Schema::dropIfExists('documents');
    }
}
