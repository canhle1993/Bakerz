<!-- resources/views/client_location.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title>Kiểm tra khoảng cách đến cửa hàng</title>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <style>
        #map {
            height: 500px;
            width: 500px;
        }
    </style>
</head>
<body>
    <h1>Vị trí hiện tại của bạn</h1>
    <p id="distance">Đang tính toán khoảng cách...</p>
    <div id="map">Đang tải bản đồ...</div>

    <script>
        // Khởi tạo bản đồ Google Maps
        function initMap(latitude, longitude) {
            var userLocation = { lat: latitude, lng: longitude };
            var storeLocation = { lat: 10.80688612, lng: 106.71420533 }; // Tọa độ cửa hàng

            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 12,
                center: userLocation
            });

            // Thêm marker cho vị trí người dùng
            var userMarker = new google.maps.Marker({
                position: userLocation,
                map: map,
                title: 'Vị trí của bạn'
            });

            // Thêm marker cho vị trí cửa hàng
            var storeMarker = new google.maps.Marker({
                position: storeLocation,
                map: map,
                title: 'Cửa hàng'
            });
        }

        // Lấy vị trí của người dùng và hiển thị trên bản đồ
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                let latitude = position.coords.latitude;
                let longitude = position.coords.longitude;

                console.log("Vị trí của bạn:", latitude, longitude);

                // Hiển thị bản đồ với vị trí của người dùng
                initMap(latitude, longitude);

                // Gửi tọa độ đến server để tính toán khoảng cách
                axios.post('/calculate-distance', {
                    latitude: latitude,
                    longitude: longitude
                })
                .then(response => {
                    // Hiển thị kết quả khoảng cách
                    document.getElementById('distance').innerText = `Khoảng cách đến cửa hàng: ${response.data.distance} km`;
                })
                .catch(error => {
                    console.error('Lỗi khi tính toán khoảng cách:', error);
                });
            }, function(error) {
                console.error('Lỗi khi lấy vị trí:', error);
                document.getElementById('distance').innerText = "Không thể lấy vị trí của bạn.";
            });
        } else {
            console.error('Trình duyệt không hỗ trợ Geolocation API');
            document.getElementById('distance').innerText = "Trình duyệt không hỗ trợ định vị vị trí.";
        }
    </script>

    <!-- Nhúng Google Maps API với API Key của bạn -->
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCL6FrEVskAymb9R3vRkVWGgQYc5LrCW8A&callback=initMap">
    </script>
    <a href="<?php echo e(route('client.home')); ?>">Quay về trang Home</a></li>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Bakerz\resources\views/client_location.blade.php ENDPATH**/ ?>