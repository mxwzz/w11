<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สถานะห้องประชุม</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Kanit', sans-serif; background-color: #f3f4f6; }
    </style>
</head>
<body class="p-6">

    <div class="max-w-7xl mx-auto">
        <div class="bg-white rounded-lg shadow-sm p-4 flex justify-between items-center mb-6">
            <h1 class="text-xl font-bold flex items-center text-gray-800">
                🏢 <span class="ml-2">สถานะห้องประชุม (Meeting Room System)</span>
            </h1>
            <div class="text-sm text-gray-500">
                ข้อมูลอัปเดตล่าสุด: {{ date('d/m/Y') }}
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            
            @foreach($rooms as $room)
            <div class="bg-white rounded-xl shadow-sm border-t-4 border-red-500 p-5">
                
                <div class="flex justify-between items-start mb-2">
                    <h2 class="text-xl font-bold text-gray-800">{{ $room->room_name }}</h2>
                    <span class="bg-red-100 text-red-600 px-3 py-1 rounded-full text-xs font-medium">
                        มีการจอง
                    </span>
                </div>

                <div class="text-sm text-gray-600 mb-1">
                    สถานที่: {{ $room->location }} | ประเภท: {{ $room->room_type ?? 'Standard' }}
                </div>
                
                <div class="text-blue-700 font-semibold mb-4">
                    รองรับ: {{ $room->capacity }} ท่าน
                </div>

                <div class="bg-blue-50 rounded-lg p-3 text-sm text-gray-700">
                    <div class="flex items-start mb-1">
                        <span class="mr-2">🔌</span>
                        <span><strong>อุปกรณ์:</strong> {{ $room->equipment }}</span>
                    </div>
                </div>

            </div>
            @endforeach

        </div>
    </div>

</body>
</html>