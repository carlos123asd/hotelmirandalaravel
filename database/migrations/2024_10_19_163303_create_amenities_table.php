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
        Schema::create('amenities', function (Blueprint $table) {
            $table->id();
            $table->enum('icon',[
                'build/images/imgs/listaroomdetails/lista1.svg',
                'build/images/imgs/listaroomdetails/lista2.svg',
                'build/images/imgs/listaroomdetails/lista3.svg',
                'build/images/imgs/listaroomdetails/lista4.svg',
                'build/images/imgs/listaroomdetails/lista5.svg',
                'build/images/imgs/listaroomdetails/lista8.svg',
                'build/images/imgs/listaroomdetails/lista9.svg',
                'build/images/imgs/listaroomdetails/lista10.svg',
                'build/images/imgs/listaroomdetails/lista11.svg',
                'build/images/imgs/listaroomdetails/lista12.svg'
            ]);
            $table->enum('name',[
                'Air conditioner', 
                'Breakfast', 
                'Cleaning', 
                'Grocery', 
                'Shop near', 
                'High speed WiFi', 
                'Kitchen',
                'Shower',
                'Single bed',
                'Towels'
            ]);
            $table->timestamps();
        });
        Schema::create('amenity_room', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('room_id');
            $table->unsignedBigInteger('amenity_id');
            $table->foreign('room_id')->references('id')->on('rooms')->onDelete('cascade');
            $table->foreign('amenity_id')->references('id')->on('amenities')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('amenities');
        Schema::dropIfExists('amenity_room');
    }
};
