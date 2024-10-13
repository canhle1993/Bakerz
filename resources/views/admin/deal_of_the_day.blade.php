@extends('admin.dashboard')

@section('deal_of_the_day_content')
<div class="container mt-4">
    <!-- Nút thêm deal -->
    <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addDealModal">Add Deal</button>

    <!-- Bảng danh sách Deal -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Promotion date</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($deals as $deal)
            <tr>
                <td><img src="{{ asset('storage/' . $deal->image) }}" alt="{{ $deal->name }}" width="100"></td>
                <td>{{ $deal->name }}</td>
                <td>{{ $deal->promotion_date }}</td>
                <td>${{ number_format($deal->price, 2) }}</td>
                <td>
                    <!-- Nút sửa -->
                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editDealModal{{ $deal->deal_id }}">Edit</button>
                    <!-- Nút xóa -->
                    <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteDealModal{{ $deal->deal_id }}">Delete</button>
                </td>
            </tr>

            <!-- Modal sửa deal -->
            <div class="modal fade" id="editDealModal{{ $deal->deal_id }}" tabindex="-1" >
                <div class="modal-dialog">
                    <form action="{{ route('admin.deal.update', $deal->deal_id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editDealLabel">Edit Deal</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" value="{{ $deal->name }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file" class="form-control" name="image">
                                    <img src="{{ asset('storage/' . $deal->image) }}" alt="{{ $deal->name }}" width="100" class="mt-2">
                                </div>
                                <div class="form-group">
                                    <label for="promotion_date">Promotion date</label>
                                    <input type="date" class="form-control" name="promotion_date" value="{{ $deal->promotion_date }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="number" class="form-control" name="price" value="{{ $deal->price }}" step="0.01" required>
                                    </div>
                                <div class="form-group">
                                    <label for="product_id">Product</label>
                                    <select class="form-control" name="product_id" required>
                                        @foreach($products as $product)
                                        <option value="{{ $product->product_id }}" {{ $deal->product_id == $product->product_id ? 'selected' : '' }}>{{ $product->product_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Modal xóa deal -->
            <div class="modal fade" id="deleteDealModal{{ $deal->deal_id }}" tabindex="-1" aria-labelledby="deleteDealLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form action="{{ route('admin.deal.destroy', $deal->deal_id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteDealLabel">Delete</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            Are you sure you want to delete this deal?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            @endforeach
        </tbody>
    </table>
</div>

<!-- Modal thêm deal -->
<div class="modal fade" id="addDealModal" tabindex="-1" aria-labelledby="addDealLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{ route('admin.deal.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addDealLabel">Add New</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" name="image" required>
                    </div>
                    <div class="form-group">
                        <label for="promotion_date">Promotion date</label>
                        <input type="date" class="form-control" name="promotion_date" required>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" class="form-control" name="price" step="0.01" required>
                    </div>
                    <div class="form-group">
                        <label for="product_id">Product</label>
                        <select class="form-control" name="product_id" required>
                            @foreach($products as $product)
                            <option value="{{ $product->product_id }}">{{ $product->product_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
