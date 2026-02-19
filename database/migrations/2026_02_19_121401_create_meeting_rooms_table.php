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
    Schema::create('meeting_rooms', function (Blueprint $table) {
        $table->id(); // ฟิลด์ที่ 8
        $table->string('room_name'); // ฟิลด์ที่ 9
        $table->integer('capacity'); // ฟิลด์ที่ 10
        $table->string('location'); // ฟิลด์ที่ 11
        $table->string('equipment'); // ฟิลด์ที่ 12
        $table->string('room_image')->nullable(); // ฟิลด์ที่ 13
        $table->enum('room_type', ['Standard', 'VIP', 'Conference']); // ฟิลด์ที่ 14
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meeting_rooms');
    }
};
