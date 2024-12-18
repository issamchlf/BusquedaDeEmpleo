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
        Schema::create('details', function (Blueprint $table) {
                $table->id(); 
                $table->foreignId('work_id')->constrained('works')->onDelete('cascade'); 
                $table->string('company_name'); 
                $table->string('location'); 
                $table->text('comment'); 
                $table->bigInteger('salary'); 
                $table->string('URL'); 
                $table->timestamps(); 
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('details');
    }
};
