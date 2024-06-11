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
        Schema::create('ice_cream_flavour', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ice_cream_id');
            $table->unsignedBigInteger('flavour_id');
            $table->unsignedBigInteger('type_id')->nullable();
            $table->timestamps();
            $table->foreign('ice_cream_id')->references('id')->on('ice_creams')->onDelete('cascade');
            $table->foreign('flavour_id')->references('id')->on('flavours')->onDelete('cascade');
            $table->foreign('type_id')->references('id')->on('types')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ice_cream_flavour');
    }
};
