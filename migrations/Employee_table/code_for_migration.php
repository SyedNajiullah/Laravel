<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->id('SSN');
            $table->date('Bdate');
            //composite attribute
            $table->string('Fname', 15);
            $table->string('Minit', 15);
            $table->string('Lname', 15);

            $table->string('Address', 50);
            $table->decimal('salary', 9, 2);
            $table->enum('Sex', ['male', 'female']);
            //adding foreign_key
            $table->unsignedBigInteger('department_id')->nullable();
            $table->foreign('department_id')->references('department_number')->on('DEPARTMENT')->onDelete('cascade')->onUpdate('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee');
    }
};
