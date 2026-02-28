<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  
    public function up(): void
    {
     Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('session_id')->index();
            $table->string('name');
            $table->decimal('total_budget', 15, 2)->default(0.00);
            $table->string('type');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};