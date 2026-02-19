<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    // ดึงข้อมูลห้องประชุมทั้งหมด
    $rooms = DB::table('meeting_rooms')->get();
    
    // ส่งข้อมูลไปที่ไฟล์ resources/views/welcome.blade.php
    return view('welcome', compact('rooms')); 
});