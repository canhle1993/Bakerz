<!DOCTYPE html>
<html>
<head>
    <title>Online Users</title>
</head>
<body>
    <h1>Số người đang truy cập: <?php echo e($onlineCount); ?></h1>
    <script>
        

        document
          .getElementById("healthSuggestionBtn")
          .addEventListener("click", function () {
            var form = document.getElementById("healthForm");
            form.classList.toggle("hidden-form");
          });
  
      document.addEventListener("visibilitychange", updateonlineUser);
  
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
          
          if (height > 0 && weight > 0 && height <= 500 && weight <= 500) {
              height = height / 100;
              var bmi = (weight / (height * height)).toFixed(2);
              $('#bmiResult').text(bmi);
              
              // Cập nhật trạng thái checkbox "Thừa Cân" và "Thiếu Cân"
              updateHeathStatus(bmi);
          } else {
              
              $('#bmiResult').text('No data available yet.');
              
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
          handleKeyDown.call(this, event, 500); // Giới hạn chiều cao tối đa là 3 mét
      });
  
      $('#weightInput').on('keydown', function(event) {
          handleKeyDown.call(this, event, 500); // Giới hạn cân nặng tối đa là 500 kg
      });
  
      document.getElementById('btnFilter').addEventListener('click', function() {
          sessionStorage.setItem('scrollToA1', 'true');
      });
      
      window.addEventListener('load', function() {
          updateonlineUser();
          document.getElementById('a2').style.display = 'none';  // Show the product section
          if (sessionStorage.getItem('scrollToA1') === 'true') {
              document.getElementById('a2').style.display = 'block';  // Show the product section
              document.getElementById('a1').scrollIntoView({
                  behavior: 'smooth'
              });
              // Xóa cờ sau khi đã cuộn xong để không lặp lại trong lần tải sau
              sessionStorage.removeItem('scrollToA1');
          }
      });
  
      $('.quickview').on('click', function(e) {
              e.preventDefault();
              var productid = $(this).data('product-id');  // Lấy product ID từ thuộc tính data-product-id
  
              // Gọi AJAX để lấy dữ liệu sản phẩm
              $.ajax({
                  url: "<?php echo e(route('product.details', ':id')); ?>".replace(':id', productid), // Thay :id bằng product ID
                  type: 'GET',
                  dataType: 'json',
                  success: function(response) {
                      if (response.status === 'success') {
                          var product = response.product;  // Đối tượng product từ server
                          
                          // Đổ dữ liệu vào modal
                          $('#modal-single-product .product-head-price').text(product.price);  // Đổ giá sản phẩm
                          $('#modal-single-product .desc-content').html(product.describe);  // Đổ mô tả sản phẩm
                          
                          // Cập nhật hình ảnh sản phẩm
                          var imagesHtml = '';
                          var productImage = "<?php echo e(asset('storage/products/')); ?>/" + product.image; // Sử dụng asset() của Laravel để lấy đường dẫn tương đối
  
                          imagesHtml += '<div class="swiper-slide"><img style="z-index: 1;"  class="w-100" src="' + productImage + '" alt="Product"></div>';
                          product.images.forEach(function(image) {
                              var imageUrl = "<?php echo e(asset('storage/products')); ?>/" + image.image; // Access the correct field inside image object
                              imagesHtml += '<div  class="swiper-slide"><img style="z-index: 1;"  class="w-100" src="' + imageUrl + '" alt="Product"></div>';
                          });
  
                          $('.single-product-vertical-tab .swiper-wrapper').html(imagesHtml);
                          $('.product-thumb-vertical .swiper-wrapper').html(imagesHtml);
                          
                          // Hiển thị modal
                          $('#exampleProductModal').modal('show');
                      } else {
                          alert(response.message); // Hiển thị thông báo lỗi nếu có
                      }
                  },
                  error: function(xhr, status, error) {
                      console.error(error); // Xử lý lỗi
                  }
              });
          });
  
          function updateonlineUser() {
                  $.ajax({
                      url: "<?php echo e(route('online-users')); ?>", // Đường dẫn để lấy lại giỏ hàng từ session
                      method: "GET",
                      success: function(response) {
                          $('#onlineCount').text(response.onlineCount); // Cập nhật lại số lượng giỏ hàng
                      },
                      error: function(xhr) {
                          console.error('Error:', xhr.responseText);
                          // alert('An error occurred while updating the cart.');
                      }
                  });
              }
      </script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\bakerz\resources\views/your_view.blade.php ENDPATH**/ ?>