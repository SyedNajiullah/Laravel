<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('project', function (BluePrint $table){
            $table->id('project_number');
            $table->string('name', 20)->unique();
            $table->string('location', 50);
            //adding foreign_key
            $table->unsignedBigInteger('department_id')->nullable();
            $table->foreign('department_id')->references('department_number')->on('DEPARTMENT')->onDelete('cascade')->onUpdate('set null');
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('project');
    }
};
