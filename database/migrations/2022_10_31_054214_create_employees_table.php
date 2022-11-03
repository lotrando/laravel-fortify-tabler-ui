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
            $table->string('image')->default('00000.jpg');
            $table->string('title_preffix')->nullable();
            $table->string('last_name');
            $table->string('middle_name')->nullable();
            $table->string('married_name')->nullable();
            $table->string('first_name');
            $table->string('title_suffix')->nullable();
            $table->string('department_id');
            $table->string('job_id');
            $table->string('email');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('comment');
            $table->string('phone');
            $table->string('mobile');
            $table->string('id_card');
            $table->string('id_color');
            $table->enum('coffee', ['A', 'N'])->default('N');
            $table->string('employment');
            $table->enum('status', ['active', 'inactive', 'maternal'])->default('inactive');
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
