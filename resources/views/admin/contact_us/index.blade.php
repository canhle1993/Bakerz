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

@section('admint_content')
    <div class="container-fluid">
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
Management ContactUs
</h1>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <form class="d-none d-md-flex ms-4" method="GET" action="{{ route('admin.contact_us.index') }}">
            <div class="input-group">
                <input class="form-control bg-white border-0 ps-3" type="search" placeholder="Search by Name" name="search" value="{{ request()->query('search') }}" style="border-radius: 25px 0 0 25px;">
                <button type="submit" class="btn" style="background-color: #BC8157; color: white; border-radius: 0 25px 25px 0;">
                    <i class="fas fa-search"></i>
                </button>
            </div>
            @if(request()->query('search'))
                <button type="button" class="btn btn-light ms-2" id="reset-search" style="border-radius: 25px;">✖</button>
            @endif
        </form>
    </div>
    <div class="col-md-4"></div>
</div>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Comment</th>
                    <th>Status</th> <!-- Cột trạng thái -->
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                    <tr>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->phone }}</td>
                        <td>{{ $contact->address }}</td>
                        <td>{!! nl2br(e($contact->comment)) !!}</td>
                        <td>
                            @if($contact->status == 'answered')
                                <span class="badge bg-success">Answered</span>
                            @else
                                <span class="badge bg-warning">Unanswered</span>
                            @endif
                        </td>
                        <td>
                            <!-- Nút mở modal trả lời -->
                            <button class="btn" data-bs-toggle="modal" data-bs-target="#replyModal" data-id="{{ $contact->ID }}" data-email="{{ $contact->email }}" data-name="{{ $contact->name }}" style="background-color: #28a745; color: white; border: none; padding: 10px 20px; border-radius: 5px; transition: background-color 0.3s ease; cursor: pointer;">
                                Replies
                            </button>


                            <!-- Nút mở modal xem câu trả lời -->
                            @if($contact->status == 'answered')
                                    <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#viewReplyModal" data-reply="{{ $contact->reply }}">
                                        View
                                    </button>
                                @endif
                            <form action="{{ route('admin.contact_us.delete', $contact->ID) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $contacts->appends(request()->except('page'))->links('pagination::bootstrap-4') }}
        </div>
    </div>

    <!-- Modal cho form trả lời -->
    <div class="modal fade" id="replyModal" tabindex="-1" aria-labelledby="replyModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="replyModalLabel">Reply to <span id="contactName"></span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="replyForm" action="" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="reply">Reply</label>
                            <textarea name="reply" id="reply" rows="5" class="form-control" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn" style="background-color: #ffc107; color: white; border: none; padding: 10px 20px; border-radius: 5px; transition: background-color 0.3s ease;">
                            Send
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal cho form xem câu trả lời -->
<div class="modal fade" id="viewReplyModal" tabindex="-1" aria-labelledby="viewReplyModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewReplyModalLabel">View Reply</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p id="viewReplyContent"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


    <!-- Script để điền dữ liệu động vào modal -->
    <script>
       document.addEventListener('DOMContentLoaded', function () {
        var replyModal = document.getElementById('replyModal');
        replyModal.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget;
            var contactId = button.getAttribute('data-id');
            var contactName = button.getAttribute('data-name');
            var contactEmail = button.getAttribute('data-email');

            // Đặt giá trị vào form
            var modalTitle = replyModal.querySelector('.modal-title #contactName');
            modalTitle.textContent = contactName;

            // Cập nhật action form với URL động
            var form = replyModal.querySelector('form');
            form.action = "{{ route('admin.contact_us.sendReply', '') }}/" + contactId;
        });

        var viewReplyModal = document.getElementById('viewReplyModal');
            viewReplyModal.addEventListener('show.bs.modal', function (event) {
                var button = event.relatedTarget;
                var replyContent = button.getAttribute('data-reply');
                var modalBody = viewReplyModal.querySelector('#viewReplyContent');
                modalBody.textContent = replyContent;
            });

        var resetButton = document.getElementById('reset-search');
            if (resetButton) {
                resetButton.addEventListener('click', function () {
                    window.location.href = "{{ route('admin.contact_us.index') }}";
                });
            }
    });
    </script>
@endsection
