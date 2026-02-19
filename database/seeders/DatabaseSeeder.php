<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. จำลองข้อมูลผู้ใช้
        DB::table('users')->insert([
            'employee_id' => 'EMP001',
            'full_name' => 'นายสมชาย ใจดี',
            'email' => 'somchai@test.com',
            'department' => 'IT Support',
            'password' => Hash::make('password123'),
            'phone_number' => '081-234-5678',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // 2. จำลองข้อมูลห้องประชุม (เพิ่มรวดเดียว 6 ห้อง)
        DB::table('meeting_rooms')->insert([
            [
                'room_name' => 'ห้อง 101 (Meeting A)',
                'capacity' => 10,
                'location' => 'ชั้น 1',
                'equipment' => 'TV 65 นิ้ว, กระดานไวท์บอร์ด',
                'room_image' => 'room101.jpg',
                'room_type' => 'Standard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'room_name' => 'ห้อง 102 (Meeting B)',
                'capacity' => 12,
                'location' => 'ชั้น 1',
                'equipment' => 'Projector, กระดานไวท์บอร์ด',
                'room_image' => 'room102.jpg',
                'room_type' => 'Standard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'room_name' => 'ห้อง 201 (Conference)',
                'capacity' => 50,
                'location' => 'ชั้น 2',
                'equipment' => 'Projector คู่, เครื่องเสียงชุดใหญ่, ไมค์โครโฟน',
                'room_image' => 'room201.jpg',
                'room_type' => 'Conference',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'room_name' => 'ห้อง 301 (Creative Room)',
                'capacity' => 15,
                'location' => 'ชั้น 3',
                'equipment' => 'Smart Board, โซฟา, กระดานกระจก',
                'room_image' => 'room301.jpg',
                'room_type' => 'Standard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'room_name' => 'ห้อง 401 (VIP Boardroom)',
                'capacity' => 8,
                'location' => 'ชั้น 4',
                'equipment' => 'TV 85 นิ้ว, ระบบ Video Conference',
                'room_image' => 'room401.jpg',
                'room_type' => 'VIP',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'room_name' => 'ห้อง 402 (Mini VIP)',
                'capacity' => 6,
                'location' => 'ชั้น 4',
                'equipment' => 'TV 55 นิ้ว, ระบบ Video Call',
                'room_image' => 'room402.jpg',
                'room_type' => 'VIP',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);

        // 3. จำลองข้อมูลการจอง (เพื่อให้ข้อมูลครบถ้วน ไม่ติด Error Foreign Key)
        DB::table('bookings')->insert([
            'title' => 'ประชุมโปรเจกต์จบ',
            'start_time' => Carbon::parse('2026-01-27 09:00:00'),
            'end_time' => Carbon::parse('2026-01-27 12:00:00'),
            'status' => 'Approved',
            'reason' => 'นำเสนอ ER-Diagram',
            'attendees_count' => 5,
            'user_id' => 1,
            'room_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}