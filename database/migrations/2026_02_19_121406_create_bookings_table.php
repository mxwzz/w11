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
    Schema::create('bookings', function (Blueprint $table) {
        $table->id(); // ฟิลด์ที่ 15
        $table->string('title'); // ฟิลด์ที่ 16
        $table->dateTime('start_time'); // ฟิลด์ที่ 17
        $table->dateTime('end_time'); // ฟิลด์ที่ 18
        $table->string('status')->default('Pending'); // ฟิลด์ที่ 19
        $table->text('reason'); // ฟิลด์ที่ 20
        $table->integer('attendees_count'); // ฟิลด์ที่ 21
        $table->foreignId('user_id')->constrained('users'); // ผู้จอง
        $table->foreignId('room_id')->constrained('meeting_rooms'); // ห้อง
        $table->timestamps(); // ฟิลด์ที่ 22 (created_at, updated_at)
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
