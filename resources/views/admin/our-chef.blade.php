@extends('admin.dashboard')

@section('admin_content')
    <div class="container mt-5">
        <h1>Chef List</h1>

        <!-- Form tìm kiếm chef theo tên -->
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form class="d-flex mb-4" method="GET" action="{{ route('admin.chefs.create') }}"> <!-- Sửa route -->
                    <input class="form-control me-2" type="search" placeholder="Search Chef Name" name="search" value="{{ request()->query('search') }}">
                    <button class="btn btn-primary" type="submit">Search</button>
                </form>
            </div>
            <div class="col-md-4">
                <a href="{{ route('admin.chefs.create') }}" class="btn btn-light">Reset</a> <!-- Sửa route -->
            </div>
        </div>

        <!-- Nút Thêm Chef Mới -->
        <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#createChefModal">Add Chef</button>

        <!-- Modal Thêm Chef Mới -->
        <div class="modal fade" id="createChefModal" tabindex="-1" aria-labelledby="createChefModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-primary" id="createChefModalLabel">Add Chef</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Form Thêm Chef -->
                        <form id="createChefForm" action="{{ route('admin.chefs.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" id="name" required>
                            </div>

                            <div class="mb-3">
                                <label for="position" class="form-label">Position</label>
                                <input type="text" name="position" class="form-control" id="position" required>
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Describe</label>
                                <textarea name="description" class="form-control" id="description" rows="4" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" name="image" class="form-control" id="image" accept="image/*" required>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" form="createChefForm" class="btn btn-primary">Add Chef</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bảng thông tin Chef -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Describe</th>
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
                            Edit
                        </button>

                        <!-- Form Xóa Chef -->
                        <form action="{{ route('admin.chefs.destroy', $chef->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Hiển thị phân trang -->
    

        <!-- Modal Sửa Chef -->
        <div class="modal fade" id="editChefModal" tabindex="-1" aria-labelledby="editChefModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-primary" id="editChefModalLabel">Edit</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Form Sửa Chef -->
                        <form id="editChefForm" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <input type="hidden" name="id" id="editChefId">

                            <div class="mb-3">
                                <label for="editName" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" id="editName" required>
                            </div>

                            <div class="mb-3">
                                <label for="editPosition" class="form-label">Position</label>
                                <input type="text" name="position" class="form-control" id="editPosition" required>
                            </div>

                            <div class="mb-3">
                                <label for="editDescription" class="form-label">Describe</label>
                                <textarea name="description" class="form-control" id="editDescription" rows="4" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="editImage" class="form-label">Image</label>
                                <input type="file" name="image" class="form-control" id="editImage" accept="image/*">
                                <img id="currentImage" src="" alt="Current Image" width="100" class="mt-3">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" form="editChefForm" class="btn btn-primary">Update</button>
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

                // Set values for form fields
                document.getElementById('editChefId').value = chefId;
                document.getElementById('editName').value = name;
                document.getElementById('editPosition').value = position;
                document.getElementById('editDescription').value = description;
                document.getElementById('currentImage').src = image;

                // Set dynamic action for the form
                const updateUrl = `{{ route('admin.chefs.update', ':id') }}`;
                document.getElementById('editChefForm').action = updateUrl.replace(':id', chefId);
            });
        });
    </script>

@endsection
