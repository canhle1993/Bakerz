@extends('admin.dashboard') <!-- Kế thừa từ layout dashboard -->

@section('admin_content') <!-- Thêm nội dung vào section -->

    <div class="container mt-5">
        <h1>Danh sách Chef</h1>

        <!-- Nút Thêm Chef Mới -->
        <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#createChefModal">Thêm Chef Mới</button>

        <!-- Modal Thêm Chef Mới -->
        <div class="modal fade" id="createChefModal" tabindex="-1" aria-labelledby="createChefModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-primary" id="createChefModalLabel">Thêm Chef Mới</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Form Thêm Chef -->
                        <form id="createChefForm" action="{{ route('admin.chefs.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Tên Chef</label>
                                <input type="text" name="name" class="form-control" id="name" required>
                            </div>

                            <div class="mb-3">
                                <label for="position" class="form-label">Chức Vụ</label>
                                <input type="text" name="position" class="form-control" id="position" required>
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Mô Tả</label>
                                <textarea name="description" class="form-control" id="description" rows="4" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="image" class="form-label">Hình Ảnh</label>
                                <input type="file" name="image" class="form-control" id="image" accept="image/*" required>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                        <button type="submit" form="createChefForm" class="btn btn-primary">Thêm Chef</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bảng thông tin Chef -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Hình Ảnh</th>
                    <th>Tên</th>
                    <th>Chức Vụ</th>
                    <th>Mô Tả</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($chefs as $chef)
                <tr>
                    <td><img src="{{ asset('storage/' . $chef->image) }}" alt="{{ $chef->name }}" width="100"></td>
                    <td>{{ $chef->name }}</td>
                    <td>{{ $chef->position }}</td>
                    <td>{!! nl2br(e($chef->description)) !!}</td>
                    <td>
                        <!-- Nút Sửa, mở modal -->
                        <button class="btn btn-warning editChefBtn" data-bs-toggle="modal" data-bs-target="#editChefModal" 
                                data-id="{{ $chef->id }}"
                                data-name="{{ $chef->name }}"
                                data-position="{{ $chef->position }}"
                                data-description="{{ $chef->description }}"
                                data-image="{{ asset('storage/' . $chef->image) }}">
                            Sửa
                        </button>

                        <!-- Form Xóa Chef -->
                        <form action="{{ route('admin.chefs.destroy', $chef->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Modal Sửa Chef -->
        <div class="modal fade" id="editChefModal" tabindex="-1" aria-labelledby="editChefModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-primary" id="editChefModalLabel">Sửa Chef</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Form Sửa Chef -->
                        <form id="editChefForm" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <input type="hidden" id="editChefId">

                            <div class="mb-3">
                                <label for="editName" class="form-label">Tên Chef</label>
                                <input type="text" name="name" class="form-control" id="editName" required>
                            </div>

                            <div class="mb-3">
                                <label for="editPosition" class="form-label">Chức Vụ</label>
                                <input type="text" name="position" class="form-control" id="editPosition" required>
                            </div>

                            <div class="mb-3">
                                <label for="editDescription" class="form-label">Mô Tả</label>
                                <textarea name="description" class="form-control" id="editDescription" rows="4" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="editImage" class="form-label">Hình Ảnh</label>
                                <input type="file" name="image" class="form-control" id="editImage" accept="image/*">
                                <img id="currentImage" src="" alt="Current Image" width="100" class="mt-3">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                        <button type="submit" form="editChefForm" class="btn btn-primary">Cập nhật Chef</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Khi click vào nút Sửa, hiển thị thông tin Chef trong modal
        document.querySelectorAll('.editChefBtn').forEach(button => {
            button.addEventListener('click', function() {
                const chefId = this.getAttribute('data-id');
                const name = this.getAttribute('data-name');
                const position = this.getAttribute('data-position');
                const description = this.getAttribute('data-description');
                const image = this.getAttribute('data-image');

                document.getElementById('editChefId').value = chefId;
                document.getElementById('editName').value = name;
                document.getElementById('editPosition').value = position;
                document.getElementById('editDescription').value = description;
                document.getElementById('currentImage').src = image;

                document.getElementById('editChefForm').action = `/admin/chefs/${chefId}`;
            });
        });
    </script>

@endsection <!-- Kết thúc section -->
