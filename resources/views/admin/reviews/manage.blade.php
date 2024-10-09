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
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Rating</th>
                <th>Comment</th>
                <th>Evaluation time</th>
                <th>Action</th>
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
                        <button class="btn btn-info" onclick="toggleView('{{ $review->ID }}')">View</button>                       
                        <!-- Nút Trả Lời -->
                        <button class="btn btn-success" onclick="toggleReplyForm('{{ $review->ID }}')">Reply</button>    
                        <!-- Nút Xóa -->
                        <form action="{{ route('reviews.delete', ['id' => $review->ID]) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
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
                                <button type="submit" class="btn btn-success">Send</button>
                            </form>
                        </div>
                    </td>
                </tr>

                <!-- Bảng Hiển Thị Thông Tin Nằm Riêng Một Hàng -->
                <tr>
                    <td colspan="8">
                        <div id="view-info-{{ $review->ID }}" style="display:none;">
                        <span><strong class="text-warning">Cake name:</strong> {{ $review->product->product_name }}</span>
                        <span><strong class="text-warning"> <span class="text-danger">|</span> Cake category:</strong>
                            @foreach ($review->product->catalogs as $catalog)
                                {{ $catalog->category_name }}{{ !$loop->last ? ', ' : '' }}
                            @endforeach
                            <span class="text-danger">|</span>
                            <a href="{{ route('product.single', ['product' => $review->product->product_id]) }}#comment-{{ $review->ID }}" class="btn btn-primary btn-sm">View comment</a>
                        </span>
                        </div>
                    </td>
                </tr>

            @endforeach
        </tbody>
    </table>
</div>
<div style="height: 20px;"></div>
<div class="d-flex justify-content-center">
    {{ $reviews->appends(request()->except('page'))->links('pagination::bootstrap-4') }}
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
