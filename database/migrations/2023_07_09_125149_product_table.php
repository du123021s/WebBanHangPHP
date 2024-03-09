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
        Schema::create('Product', function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('catalogId', 5);
            $table->decimal('price',8,2);
            $table->integer('stock')->nullable();
            $table->string('color')->nullable();
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();

            $table->softDeletes();
            $table->timestamps();  // add created_at, updated_at
            $table->foreign('catalogId')->references('catalogID')->on('Catalog')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Product');
    }
};
