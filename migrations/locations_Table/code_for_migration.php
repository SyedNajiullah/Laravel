<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->string('address', 50);
            $table->string('city', 50);
            $table->string('state', 50)->nullable();
            $table->string('country', 50)->nullable();
            //adding foreign_key
            $table->unsignedBigInteger('department_id')->nullable();
            $table->foreign('department_id')->references('department_number')->on('DEPARTMENT')->onDelete('cascade')->onUpdate('set null');
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('locations');
    }
};
