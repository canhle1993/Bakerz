<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title>Bakerz Bite</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('assets/images/Frame1.png')); ?>">

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <style>
        #map {
            height: 500px;
            width: 100%;
        }
    </style>
</head>
<body>
    <h1  style="display: none;">Vị trí hiện tại của bạn</h1>
    <p id="distance">The distance from your location to the store is: 1.46 km</p>
    <div id="map">Đang tải bản đồ...</div>

    <script>
        // Khởi tạo bản đồ Google Maps và chỉ đường
        function displayMap(latitude, longitude) {
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

            // Tạo dịch vụ chỉ đường
            var directionsService = new google.maps.DirectionsService();
            var directionsRenderer = new google.maps.DirectionsRenderer();
            directionsRenderer.setMap(map);

            // Tính toán và hiển thị chỉ đường
            var request = {
                origin: userLocation,
                destination: storeLocation,
                travelMode: 'DRIVING' // Phương tiện di chuyển: 'DRIVING', 'WALKING', 'BICYCLING', 'TRANSIT'
            };

            directionsService.route(request, function(result, status) {
                if (status === 'OK') {
                    directionsRenderer.setDirections(result); // Hiển thị chỉ đường lên bản đồ
                } else {
                    console.error('Lỗi khi chỉ đường: ' + status);
                }
            });
        }

        // Lấy vị trí của người dùng và hiển thị trên bản đồ
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                let latitude = position.coords.latitude;
                let longitude = position.coords.longitude;

                console.log("Vị trí của bạn:", latitude, longitude);

                // Hiển thị bản đồ với vị trí của người dùng và tính toán chỉ đường
                displayMap(latitude, longitude);

                // Gửi tọa độ đến server để tính toán khoảng cách
                axios.post('/calculate-distance', {
                    latitude: latitude,
                    longitude: longitude
                }, {
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    }
                })
                .then(response => {
                    console.log(response.data);
                    document.getElementById('distance').innerText = `The distance from your location to the store is: ${response.data.distance} km`;
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
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDLyLJ5CjThpOJAlZc593fLNIMm0XiBCHs&libraries=places">
    </script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\bakerz\resources\views/client_location.blade.php ENDPATH**/ ?>