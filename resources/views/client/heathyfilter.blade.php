<form id="filterForm" method="GET" action="{{ route('client.heathyfilter') }}">
    <h3>Filter by Health Catalog</h3>
    @foreach($heathyCatalogs as $catalog)
        <div>
            <input type="checkbox" name="heath_id[]" value="{{ $catalog->heath_id }}"
                   id="heath_{{ $catalog->heath_id }}"
                   {{ (is_array(request('heath_id')) && in_array($catalog->heath_id, request('heath_id'))) ? 'checked' : '' }}>

            <label for="heath_{{ $catalog->heath_id }}">{{ $catalog->heath_catalog }}</label>
        </div>
    @endforeach
    <button type="submit">Filter</button>
</form>
<!-- Thêm phần nhập chiều cao và cân nặng -->
<div>
    <label for="heightInput">Chiều cao (m):</label>
    <input type="number" id="heightInput" min="0" max="3" maxlength="1" step="0.01" placeholder="Nhập chiều cao">
    
    <label for="weightInput">Cân nặng (kg):</label>
    <input type="number" id="weightInput" min="0" max="500" maxlength="3" step="0.1" placeholder="Nhập cân nặng">
</div>

<!-- Phần hiển thị chỉ số BMI -->
<div>
    <h4>Chỉ số BMI: <span id="bmiResult">Chưa có dữ liệu</span></h4>
</div>

<div id="productList">
    <!-- Hiển thị danh sách sản phẩm ngay tại đây -->
    @if($products->isEmpty())
        <p>No products found.</p>
    @else
        @foreach($products as $product)
            <div>
                <h4>{{ $product->product_name }}</h4>
                <!-- Hiển thị các thông tin khác của sản phẩm -->
            </div>
        @endforeach
    @endif
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    // Bắt sự kiện thay đổi trạng thái của các checkbox
    $('input[name="heath_id[]"]').on('change', function() {
        $.ajax({
            url: $('#filterForm').attr('action'),
            type: 'GET',
            data: $('#filterForm').serialize(),
            success: function(response) {
                $('#productList').html($(response).find('#productList').html());
            },
            error: function(xhr, status, error) {
                console.log('Lỗi:', error);
                alert('Có lỗi xảy ra trong quá trình lọc sản phẩm.');
            }
        });
    });


 // Hàm để kiểm tra và cập nhật trạng thái của checkbox
 function updateHeathStatus(bmi) {
    // Lấy checkbox "Thừa Cân" và "Thiếu Cân"
    var thuaCanCheckbox = $('input[name="heath_id[]"][value="4"]');// 4 là thừa cân
    var thieuCanCheckbox = $('input[name="heath_id[]"][value="5"]');// 5 là thiếu cân

    // Xử lý tự động check/uncheck dựa vào BMI
    if (bmi >= 25) {
        thuaCanCheckbox.prop('checked', true);
        thieuCanCheckbox.prop('checked', false);
    } else if (bmi < 18.5) {
        thieuCanCheckbox.prop('checked', true);
        thuaCanCheckbox.prop('checked', false);
    } else {
        thuaCanCheckbox.prop('checked', false);
        thieuCanCheckbox.prop('checked', false);
    }
}

    // Bắt sự kiện khi người dùng nhập chiều cao và cân nặng để tính BMI
    $('#heightInput, #weightInput').on('input', function() {

        var height = parseFloat($('#heightInput').val());
        var weight = parseFloat($('#weightInput').val());
        
        if (height > 0 && weight > 0 && height <= 3 && weight <= 500) {
            var bmi = (weight / (height * height)).toFixed(2);
            $('#bmiResult').text(bmi);
            
            // Cập nhật trạng thái checkbox "Thừa Cân" và "Thiếu Cân"
            updateHeathStatus(bmi);
        } else {
            
            $('#bmiResult').text('Chưa có dữ liệu');
            
            // Nếu không hợp lệ, bỏ chọn cả hai checkbox
            $('input[name="heath_id[]"][value="Thừa Cân"]').prop('checked', false);
            $('input[name="heath_id[]"][value="Thiếu Cân"]').prop('checked', false);
        }
    });

    // Hàm chung để xử lý sự kiện keydown cho cả chiều cao và cân nặng
    function handleKeyDown(event, maxValue) {
        // Cho phép các phím điều khiển như: backspace, delete, tab, escape, enter
        var allowedKeys = [8, 9, 27, 13, 46]; // Backspace, Tab, Escape, Enter, Delete

        // Cho phép các phím mũi tên trái/phải và các tổ hợp phím điều khiển (Ctrl+A, Ctrl+C, Ctrl+V, Ctrl+X)
        if (allowedKeys.indexOf(event.keyCode) !== -1 ||
            (event.keyCode === 65 && event.ctrlKey === true) ||  // Ctrl+A
            (event.keyCode === 67 && event.ctrlKey === true) ||  // Ctrl+C
            (event.keyCode === 86 && event.ctrlKey === true) ||  // Ctrl+V
            (event.keyCode === 88 && event.ctrlKey === true) ||  // Ctrl+X
            (event.keyCode >= 35 && event.keyCode <= 39)) {       // Mũi tên trái/phải
            return; // Cho phép các phím điều khiển
        }

        if (value.split('.').length > 2) {
            $(this).val(value.slice(0, -1)); // Ngăn không cho nhập thêm dấu chấm
            return;
        }

        // Lấy giá trị hiện tại sau khi nhập
        var currentValue = $(this).val();

        // Kiểm tra nếu giá trị không phải là số hoặc vượt quá maxValue
        var parsedValue = parseFloat(currentValue);

        if (!isNaN(parsedValue) && parsedValue > maxValue) {
            event.preventDefault(); // Chặn không cho nhập nếu giá trị vượt quá maxValue
        }
    }
    
     // Áp dụng hàm xử lý sự kiện cho cả chiều cao và cân nặng
     $('#heightInput').on('keydown', function(event) {
        handleKeyDown.call(this, event, 3); // Giới hạn chiều cao tối đa là 3 mét
    });

    $('#weightInput').on('keydown', function(event) {
        handleKeyDown.call(this, event, 500); // Giới hạn cân nặng tối đa là 500 kg
    });

</script>
