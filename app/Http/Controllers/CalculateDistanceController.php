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

    public function calculateDistance(Request $request)
    {
        // Tọa độ của cửa hàng tại Aptech Latitude là vĩ độ, Long titude là kinh độ
        $storeLatitude = 10.80688612;
        $storeLongitude = 106.71420533;

        // Lấy tọa độ người dùng từ request
        $clientLatitude = $request->input('latitude');
        $clientLongitude = $request->input('longitude');

        // Tính khoảng cách
        $distance = $this->getDistance($storeLatitude, $storeLongitude, $clientLatitude, $clientLongitude);

        // Trả về khoảng cách dưới dạng JSON
        return response()->json(['distance' => $distance]);
    }

    // Hàm tính khoảng cách giữa 2 tọa độ (Haversine Formula)
    private function getDistance($lat1, $lon1, $lat2, $lon2)
    {
        $earthRadius = 6371; // Bán kính trái đất tính bằng km

        $dLat = deg2rad($lat2 - $lat1);
        $dLon = deg2rad($lon2 - $lon1);

        $a = sin($dLat / 2) * sin($dLat / 2) +
            cos(deg2rad($lat1)) * cos(deg2rad($lat2)) *
            sin($dLon / 2) * sin($dLon / 2);

        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));

        $distance = $earthRadius * $c;

        return round($distance, 2); // Trả về khoảng cách đã làm tròn
    }
}
