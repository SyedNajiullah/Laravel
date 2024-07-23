<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('works_on', function (Blueprint $table) {
            $table->integer('hours');
            // adding foreign key from employee table
            $table->unsignedBigInteger('employee_id')->nullable();
            $table->foreign('employee_id')->references('SSN')->on('employee')->onDelete('cascade')->onUpdate('set null');
            // adding foreign key from project table
            $table->unsignedBigInteger('project_id')->nullable(); 
            $table->foreign('project_id')->references('project_number')->on('project')->onDelete('cascade')->onUpdate('set null');
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('works_on');
    }
};
