@extends('admin.dashboard')

@section('workshop_content')
<div class="container mt-5">
    <h1>Workshop Management</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
<!-- Form tìm kiếm -->
    
    <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
            <form action="{{ route('admin.workshop.index') }}" method="GET" class="mb-4">
                <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="Search by name or product" value="{{ request()->query('search') }}">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </form>
            </div>
            <div class="col-md-4">
                <a href="{{ route('admin.workshop.index') }}" class="btn btn-light">Reset</a> <!-- Sửa route -->
            </div>
        </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Avatar</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Product</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($workshops as $workshop)
                <tr>
                    <td><img src="{{ asset('storage/avatars/' . $workshop->user->avatar) }}" alt="Avatar" class="rounded-circle" width="50" height="50"></td>
                    <td>{{ $workshop->user->name }}</td>
                    <td>{{ $workshop->user->email }}</td>
                    <td>{{ $workshop->user->phone }}</td>
                    <td>{{ $workshop->user->address }}</td>
                    <td>{{ $workshop->product }}</td>
                    <td>
                        @if ($workshop->status == 'Approved')
                            <span class="badge bg-success">{{ $workshop->status }}</span>
                        @elseif ($workshop->status == 'Cancelled')
                            <span class="badge bg-danger">{{ $workshop->status }}</span>
                        @else
                            <span class="badge bg-warning">Pending</span>
                        @endif
                    </td>
                    <td>
                        @if ($workshop->status == 'Pending')
                            <!-- Phê duyệt đăng ký -->
                            <form action="{{ route('admin.workshop.approve', ['id' => $workshop->workshop_id]) }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-success btn-sm">Approve</button>
                            </form>

                            <!-- Hủy đăng ký -->
                            <form action="{{ route('admin.workshop.cancel', ['id' => $workshop->workshop_id]) }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-warning btn-sm">Cancel</button>
                            </form>
                        @endif

                        <!-- Xóa đăng ký -->
                        <form action="{{ route('admin.workshop.delete', ['id' => $workshop->workshop_id]) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Phân trang -->
    <div class="d-flex justify-content-center">
        {{ $workshops->appends(request()->query())->links('pagination::bootstrap-4') }}
    </div>
</div>
@endsection
