<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('manages', function (Blueprint $table) {
            //this table have no ID
            $table->date('start_date');
            //adding foreign_key from department table
            $table->unsignedBigInteger('department_id')->nullable();
            $table->foreign('department_id')->references('department_number')->on('DEPARTMENT')->onDelete('cascade')->onUpdate('set null');
            //adding foreign_key from employee table
            $table->unsignedBigInteger('employee_id')->nullable();
            $table->foreign('employee_id')->references('SSN')->on('employee')->onDelete('cascade')->onUpdate('set null');
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('manages');
    }
};
