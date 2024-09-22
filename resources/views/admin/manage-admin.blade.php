@extends('admin.dashboard')

@section('manage_admin')

<div class="container">
    <h1>Quản lý Admin</h1>
    <a href="{{ route('admin.create') }}" class="btn btn-primary mb-3">Thêm Admin</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Tên</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ</th>
                <th>Ghi chú</th>
                <th>Ảnh đại diện</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($admins as $admin)
            <tr>
                <td>{{ $admin->name }}</td>
                <td>{{ $admin->email }}</td>
                <td>{{ $admin->phone }}</td>
                <td>{{ $admin->address }}</td>
                <td>{{ $admin->note }}</td>
                <td><img src="{{ asset('storage/'.$admin->avatar) }}" alt="avatar" width="50"></td>
                <td>
                    <a href="{{ route('admin.edit', $admin->user_id) }}" class="btn btn-sm btn-warning">Sửa</a>
                    <form action="{{ route('admin.destroy', $admin->user_id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Xóa</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection
