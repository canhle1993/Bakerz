<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculateDistanceController extends Controller
{
    public function showLocation()
    {
        // Trả về view hiển thị trang
        return view('client_location');
    }

    // Hàm tính khoảng cách giữa hai tọa độ
    public function calculateDistance(Request $request)
    {
        // Lấy tọa độ của người dùng từ request
        $userLatitude = $request->input('latitude');
        $userLongitude = $request->input('longitude');

        // Tọa độ của cửa hàng
        $storeLatitude = 10.80688612;
        $storeLongitude = 106.71420533;

        // Tính khoảng cách bằng công thức Haversine
        $earthRadius = 6371; // Bán kính Trái Đất tính bằng km

        $latFrom = deg2rad($userLatitude);
        $lonFrom = deg2rad($userLongitude);
        $latTo = deg2rad($storeLatitude);
        $lonTo = deg2rad($storeLongitude);

        $latDelta = $latTo - $latFrom;
        $lonDelta = $lonTo - $lonFrom;

        $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) +
                cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));
        $distance = $angle * $earthRadius;

        // Trả về khoảng cách tính bằng km
        return response()->json(['distance' => round($distance, 2)]);
    }
}
