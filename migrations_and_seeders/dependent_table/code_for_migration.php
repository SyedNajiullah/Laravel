<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dependent', function (Blueprint $table) {
            $table->string('name', 50)->unique();
            $table->enum('sex', ['male', 'female']);
            $table->date('birth_date');
            $table->string('relationship', 15);
            //adding foreign_key from employee table
            $table->unsignedBigInteger('employee_id')->nullable();
            $table->foreign('employee_id')->references('SSN')->on('employee')->onDelete('cascade')->onUpdate('set null');
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('dependent');
    }
};
