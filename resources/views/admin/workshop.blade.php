@extends('admin.dashboard')

<style>
    .btn-secondary {
       background-color: #6c757d !important;
       color: white !important;
       font-weight: bold !important;
       padding: 10px 20px !important;
       border-radius: 5px !important;
       border: none !important;
       transition: all 0.3s ease !important;
   }

   .table {
       border-collapse: separate !important;
       border-spacing: 0 15px !important;
       background-color: #fff !important;
       box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1) !important;
       border-radius: 10px !important;
   }

   .table thead th {
       background-color: #BC8157 !important;
       color: white !important;
       font-weight: bold !important;
       padding: 12px 15px !important;
       text-align: center!important;
   }

   .table tbody tr {
       background-color: #f9f9f9!important;
       transition: background-color 0.3s ease !important;
   }

   .table tbody tr:hover {
       background-color: #e9ecef!important;
   }

   .table td {
       padding: 12px 15px!important;
       text-align: center!important;
   }
   .btn:hover {
       background-color: #0056b3 !important; /* Màu xanh dương đậm hơn khi hover */
   }
</style>

@section('workshop_content')
<div class="container mt-5">
    <h1 style="color: #BC8157;
    font-size: 3rem;
    font-weight: bold;
    text-transform: uppercase;
    letter-spacing: 1px;
    text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.3);
    margin: 30px 0;
    text-align: center;
    line-height: 1.2;
    padding: 15px;
    border: 4px dashed #BC8157;
    background-color: rgba(230, 247, 255, 0.7);
    border-radius: 15px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1); /* Thêm đổ bóng cho toàn bộ box */">
Workshop Management
</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
<!-- Form tìm kiếm -->
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <form action="{{ route('admin.workshop.index') }}" method="GET" class="d-none d-md-flex mb-4">
            <div class="input-group">
                <input type="text" name="search" class="form-control bg-white border-0 ps-3" placeholder="Search by name or product" value="{{ request()->query('search') }}" style="border-radius: 25px 0 0 25px;">
                <button class="btn" type="submit" style="background-color: #BC8157; color: white; border-radius: 0 25px 25px 0;">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </form>
    </div>
    <div class="col-md-4">
        <a href="{{ route('admin.workshop.index') }}" class="btn btn-light" style="border-radius: 25px;">Reset</a> <!-- Sửa route -->
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
                <th style="width: 250px;">Action</th>
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
