@extends('admin.dashboard')

@section('manage_admin')
<div class="container-fluid">
    <h2 class="mb-4">Quản lý đánh giá và bình luận</h2>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Avatar</th>
                <th>Tên</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Rating</th>
                <th>Comment</th>
                <th>Thời gian đánh giá</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reviews as $review)
                <tr>
                    <td><img src="{{ asset('storage/avatars/' . $review->user->avatar) }}" alt="Avatar" style="width: 50px; height: 50px;" class="rounded-circle"></td>
                    <td>{{ $review->user->name }}</td>
                    <td>{{ $review->user->email }}</td>
                    <td>{{ $review->user->phone }}</td>
                    <td>{{ $review->ratestar }} / 5</td>
                    <td>{{ $review->comment }}</td>
                    <td>{{ \Carbon\Carbon::parse($review->CreatedDate)->format('d/m/Y H:i:s') }}</td>
                    <td>
                        <form action="{{ route('reviews.delete', ['id' => $review->ID]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
