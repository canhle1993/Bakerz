@extends('admin.dashboard')

@section('coming_soon_content')
<div class="container mt-4">
    <!-- Nút thêm sản phẩm sắp ra mắt -->
    <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addComingSoonModal">Thêm Sản Phẩm</button>

    <!-- Bảng danh sách sản phẩm sắp ra mắt -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Hình ảnh</th>
                <th>Tên</th>
                <th>Ngày ra mắt</th>
                <th>Giá tiền</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach($coming_soon as $item)
            <tr>
                <td><img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}" width="100"></td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->release_date }}</td>
                <td>${{ number_format($item->price, 2) }}</td>
                <td>
                    <!-- Nút sửa -->
                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editComingSoonModal{{ $item->coming_soon_id }}">Sửa</button>
                    <!-- Nút xóa -->
                    <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteComingSoonModal{{ $item->coming_soon_id }}">Xóa</button>
                </td>
            </tr>

            <!-- Modal sửa sản phẩm -->
            <div class="modal fade" id="editComingSoonModal{{ $item->coming_soon_id }}" tabindex="-1">
                <div class="modal-dialog">
                    <form action="{{ route('admin.coming_soon.update', $item->coming_soon_id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Sửa Sản Phẩm</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="name">Tên Sản Phẩm</label>
                                    <input type="text" class="form-control" name="name" value="{{ $item->name }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="image">Hình ảnh</label>
                                    <input type="file" class="form-control" name="image">
                                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}" width="100" class="mt-2">
                                </div>
                                <div class="form-group">
                                    <label for="release_date">Ngày ra mắt</label>
                                    <input type="date" class="form-control" name="release_date" value="{{ $item->release_date }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="price">Giá</label>
                                    <input type="number" class="form-control" name="price" value="{{ $item->price }}" step="0.01" required>
                                </div>
                                <div class="form-group">
                                    <label for="product_id">Sản phẩm liên kết</label>
                                    <select class="form-control" name="product_id" required>
                                        @foreach($products as $product)
                                        <option value="{{ $product->product_id }}" {{ $item->product_id == $product->product_id ? 'selected' : '' }}>{{ $product->product_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                                <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Modal xóa sản phẩm -->
            <div class="modal fade" id="deleteComingSoonModal{{ $item->coming_soon_id }}" tabindex="-1">
                <div class="modal-dialog">
                    <form action="{{ route('admin.coming_soon.destroy', $item->coming_soon_id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Xóa Sản Phẩm</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                Bạn có chắc chắn muốn xóa sản phẩm này không?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                                <button type="submit" class="btn btn-danger">Xóa</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Modal thêm sản phẩm sắp ra mắt -->
<div class="modal fade" id="addComingSoonModal" tabindex="-1" aria-labelledby="addComingSoonLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{ route('admin.coming_soon.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addComingSoonLabel">Thêm Sản Phẩm Sắp Ra Mắt</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Tên Sản Phẩm</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="image">Hình ảnh</label>
                        <input type="file" class="form-control" name="image" required>
                    </div>
                    <div class="form-group">
                        <label for="release_date">Ngày ra mắt</label>
                        <input type="date" class="form-control" name="release_date" required>
                    </div>
                    <div class="form-group">
                        <label for="price">Giá</label>
                        <input type="number" class="form-control" name="price" step="0.01" required>
                    </div>
                    <div class="form-group">
                        <label for="product_id">Sản phẩm liên kết</label>
                        <select class="form-control" name="product_id" required>
                            @foreach($products as $product)
                            <option value="{{ $product->product_id }}">{{ $product->product_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                    <button type="submit" class="btn btn-primary">Thêm Sản Phẩm</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
