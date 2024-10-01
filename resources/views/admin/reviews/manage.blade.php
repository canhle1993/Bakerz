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
                        <!-- Nút Xem -->
                        <button class="btn btn-info" onclick="toggleView('{{ $review->ID }}')">Xem</button>                       
                        <!-- Nút Trả Lời -->
                        <button class="btn btn-primary" onclick="toggleReplyForm('{{ $review->ID }}')">Trả lời</button>    
                        <!-- Nút Xóa -->
                        <form action="{{ route('reviews.delete', ['id' => $review->ID]) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Xóa</button>
                        </form>          
                    </td>
                </tr>

                <!-- Form Trả Lời Nằm Riêng Một Hàng -->
                <tr>
                    <td colspan="8">
                        <div id="reply-form-{{ $review->ID }}" style="display:none; margin-top:10px;">
                            <form action="{{ route('reviews.reply', ['id' => $review->ID]) }}" method="POST">
                                @csrf
                                <textarea name="reply" class="form-control mb-2" placeholder="Nhập câu trả lời"></textarea>
                                <button type="submit" class="btn btn-success">Gửi trả lời</button>
                            </form>
                        </div>
                    </td>
                </tr>

                <!-- Bảng Hiển Thị Thông Tin Nằm Riêng Một Hàng -->
                <tr>
                    <td colspan="8">
                        <div id="view-info-{{ $review->ID }}" style="display:none;">
                        <span><strong class="text-warning">Tên bánh:</strong> {{ $review->product->product_name }}</span>
                        <span><strong class="text-warning"> <span class="text-danger">|</span> Danh mục bánh:</strong>
                            @foreach ($review->product->catalogs as $catalog)
                                {{ $catalog->category_name }}{{ !$loop->last ? ', ' : '' }}
                            @endforeach
                            <span class="text-danger">|</span>
                            <a href="{{ route('product.single', ['product' => $review->product->product_id]) }}#comment-{{ $review->ID }}" class="btn btn-primary btn-sm">Xem comment</a>
                        </span>
                        </div>
                    </td>
                </tr>

            @endforeach
        </tbody>
    </table>
</div>

<script>
    function toggleReplyForm(id) {
        var replyForm = document.getElementById('reply-form-' + id);
        replyForm.style.display = (replyForm.style.display === 'none' || replyForm.style.display === '') ? 'block' : 'none';
    }

    function toggleView(id) {
        var viewDiv = document.getElementById('view-info-' + id);
        viewDiv.style.display = (viewDiv.style.display === 'none' || viewDiv.style.display === '') ? 'block' : 'none';
    }
</script>
@endsection
