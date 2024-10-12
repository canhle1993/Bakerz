@extends('admin.dashboard')

@section('manage_admin')
<div class="container-fluid">
    <h2 class="mb-4">Manage reviews and comments</h2>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Form tìm kiếm theo tên và số sao đánh giá -->
    <form class="mb-4" method="GET" action="{{ route('admin.reviews.manage') }}">
        <div class="row">
            <div class="col-md-5">
                <input type="text" name="searchName" class="form-control" placeholder="Search by user name" value="{{ request()->query('searchName') }}">
            </div>
            <div class="col-md-3">
                <select name="searchRating" class="form-control">
                    <option value="">Filter by Rating</option>
                    <option value="5" {{ request()->query('searchRating') == '5' ? 'selected' : '' }}>5 Stars</option>
                    <option value="4" {{ request()->query('searchRating') == '4' ? 'selected' : '' }}>4 Stars</option>
                    <option value="3" {{ request()->query('searchRating') == '3' ? 'selected' : '' }}>3 Stars</option>
                    <option value="2" {{ request()->query('searchRating') == '2' ? 'selected' : '' }}>2 Stars</option>
                    <option value="1" {{ request()->query('searchRating') == '1' ? 'selected' : '' }}>1 Star</option>
                </select>
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
            <div class="col-md-2">
                <!-- Nút Reset -->
                <a href="{{ route('admin.reviews.manage') }}" class="btn btn-secondary">Reset</a>
            </div>
        </div>
    </form>

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
                <th style="width: 230px;">Action</th>
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
                        <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#viewModal-{{ $review->ID }}">View</button>
                        <!-- Nút Trả Lời -->
                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#replyModal-{{ $review->ID }}">Reply</button>
                        <!-- Nút Xóa -->
                        <form action="{{ route('reviews.delete', ['id' => $review->ID]) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>          
                    </td>
                </tr>

                <!-- Modal for Reply -->
                <div class="modal fade" id="replyModal-{{ $review->ID }}" tabindex="-1" aria-labelledby="replyModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="replyModalLabel">Reply to Review</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{ route('reviews.reply', ['id' => $review->ID]) }}" method="POST">
                                @csrf
                                <div class="modal-body">
                                    <textarea name="reply" class="form-control mb-2" placeholder="Nhập câu trả lời"></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success">Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Modal for Viewing Information -->
                <div class="modal fade" id="viewModal-{{ $review->ID }}" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="viewModalLabel">View Review Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p><strong class="text-warning">Cake name:</strong> {{ $review->product->product_name }}</p>
                                <p><strong class="text-warning">Cake category:</strong>
                                    @foreach ($review->product->catalogs as $catalog)
                                        {{ $catalog->category_name }}{{ !$loop->last ? ', ' : '' }}
                                    @endforeach
                                </p>
                                <a href="{{ route('product.single', ['product' => $review->product->product_id]) }}#comment-{{ $review->ID }}" class="btn btn-primary btn-sm">View comment</a>
                            </div>
                        </div>
                    </div>
                </div>
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