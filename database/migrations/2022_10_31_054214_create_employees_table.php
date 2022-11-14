<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('personal_number');
            $table->string('image');
            $table->string('title_preffix')->nullable();
            $table->string('last_name');
            $table->string('middle_name')->nullable();
            $table->string('married_name')->nullable();
            $table->string('first_name');
            $table->string('title_suffix')->nullable();
            $table->string('department_id');
            $table->string('job_id');
            $table->string('email')->nullable();
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->text('comment')->nullable();
            $table->string('phone')->nullable();
            $table->string('mobile')->nullable();
            $table->string('id_card');
            $table->enum('coffee', ['A', 'N'])->default('N')->nullable();
            $table->string('employment');
            $table->enum('status', ['Aktivní', 'Neaktivní', 'Mateřská'])->default('Neaktivní');
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
        Schema::dropIfExists('employees');
    }
}
