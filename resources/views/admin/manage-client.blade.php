@extends('admin.dashboard')

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@section('manage_client')
<style>
.pagination {
    display: flex;
    justify-content: center;
    padding-left: 0;
    list-style: none;
    border-radius: 0.25rem;
}

.pagination .page-item {
    margin: 0 5px; /* Khoảng cách giữa các nút */
}

.pagination .page-link {
    position: relative;
    display: block;
    padding: 0.75rem 1.25rem;
    margin-left: -1px;
    line-height: 1.25;
    color: #171718;
    background-color: #fff;
    border: 1px solid #dee2e6;
    text-decoration: none;
    transition: all 0.3s ease-in-out;
    border-radius: 5px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.pagination .page-link:hover {
    z-index: 2;
    color: #fff;
    background-color: #f01717;
    border-color: #ff1100;
}

.pagination .page-item.active .page-link {
    z-index: 3;
    color: #fff;
    background-color: #ec0909;
    border-color: #e90611;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.pagination .page-item.disabled .page-link {
    color: #6c757d;
    pointer-events: none;
    background-color: #fff;
    border-color: #dee2e6;
}

.pagination .page-link:focus {
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}
.pagination .page-link {
    transition: all 0.3s ease;
}

.pagination .page-link:hover {
    transform: scale(1.1); /* Hiệu ứng phóng to nhẹ khi di chuột */
    color: #fff;
    background-color: #f80808;
    box-shadow: 0px 4px 10px rgba(0, 123, 255, 0.3);
}

/* Nút Edit */
.btn-warning {
    background-color: #ffc107;
    color: #000;
    border: none;
    transition: all 0.3s ease-in-out;
}

.btn-warning:hover {
    background-color: #e0a800;
    color: #fff;
    box-shadow: 0px 4px 10px rgba(224, 168, 0, 0.5); /* Thêm shadow khi hover */
    transform: scale(1.05); /* Hiệu ứng phóng to nhẹ */
}

/* Nút Delete */
.btn-danger {
    background-color: #dc3545;
    color: #fff;
    border: none;
    transition: all 0.3s ease-in-out;
}

.btn-danger:hover {
    background-color: #c82333;
    box-shadow: 0px 4px 10px rgba(200, 35, 51, 0.5); /* Thêm shadow khi hover */
    transform: scale(1.05); /* Hiệu ứng phóng to nhẹ */
}


.custom-alert {
        position: fixed;
        top: 10%;
        left: 50%;
        right:10%;
        transform: translate(-50%, -50%);
        background-color: #4CAF50;
        color: white;
        padding: 15px 30px;
        border-radius: 10px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        z-index: 9999;
        opacity: 0;
        transform: translate(-50%, -50%) scale(0.9);
        transition: all 0.5s ease-in-out;
    }

    .custom-alert.show {
        opacity: 1;
        transform: translate(-50%, -50%) scale(1);
    }

    .custom-alert .close-btn {
        background: none;
        border: none;
        color: white;
        font-size: 20px;
        font-weight: bold;
        position: absolute;
        right: 10px;
        top: 5px;
        cursor: pointer;
    }

    .custom-alert .close-btn:hover {
        color: #ddd;
    }



.table {
    border-collapse: separate;
    border-spacing: 0 15px;
    background-color: #fff;
    box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    overflow: hidden;
}


.table thead th {
    background-color: #343a40 !important;
    color: #fff !important;
    font-weight: bold !important;
    text-transform: uppercase;
    padding: 12px 15px !important;
    border-top-left-radius: 10px !important;
    border-top-right-radius: 10px !important;
    border: none !important;
    text-align: center;
}


.table tbody tr {
    background-color: #f9f9f9;
    transition: background-color 0.3s ease;
}

.table tbody tr:hover {
    background-color: #e9ecef;
}


.table td {
    padding: 12px 15px;
    color: #333;
    border: none;
    text-align: center;
    vertical-align: middle;
}


.table td img {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}


.table td img:hover {
    transform: scale(1.1);
}


.table tbody td:first-child {
    border-left: 2px solid #dee2e6;
}

.table tbody td:last-child {
    border-right: 2px solid #dee2e6;
}


.table tbody tr:last-child td:first-child {
    border-bottom-left-radius: 10px;
}

.table tbody tr:last-child td:last-child {
    border-bottom-right-radius: 10px;
}


.table td.note {
    font-style: italic;
    color: #6c757d;
}


.table-avatar {
    text-align: center;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    object-fit: cover;
}


.table td {
    font-size: 16px;
    padding: 12px;
    line-height: 1.5;
}


@media (max-width: 768px) {
    .table td {
        display: block;
        text-align: left;
        padding-left: 50%;
        position: relative;
    }

    .table td:before {
        content: attr(data-label);
        position: absolute;
        left: 10px;
        font-weight: bold;
        text-transform: uppercase;
    }

    .table td img {
        display: inline-block;
    }
}

</style>


@if(session('success'))
    <div id="custom-alert" class="custom-alert">
        {{ session('success') }}
        <button class="close-btn" onclick="closeAlert()">×</button>
    </div>

    <script>

        document.addEventListener('DOMContentLoaded', function () {
            const alert = document.getElementById('custom-alert');
            alert.classList.add('show');


            setTimeout(function () {
                closeAlert();
            }, 5000);
        });


        function closeAlert() {
            const alert = document.getElementById('custom-alert');
            alert.classList.remove('show');
            setTimeout(function () {
                alert.remove();
            }, 500);
        }
    </script>
@endif

<div class="container mt-5">

    <h1 style="color: #BC8157;
    font-size: 3.5rem;
    font-weight: bold;
    text-transform: uppercase;
    letter-spacing: 2px;
    text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.2);
    margin: 20px 0;
    text-align: center;
    line-height: 1.2;
    padding: 20px; /* Thêm khoảng cách bên trong */
    border: 3px solid #BC8157; /* Viền đỏ để làm nổi bật */
    background-color: rgba(243, 232, 232, 0.651); /* Nền đỏ nhạt để tạo độ tương phản */">
Client Management
</h1>


    <table class="table table-hover table-bordered table-striped shadow-sm">
        <thead >
            <tr>
                <th>Avatar</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Note</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
            <tr>
                <td class="text-center">
                    @if($client->avatar)
                        @if (filter_var($client->avatar, FILTER_VALIDATE_URL))
                            <!-- Nếu avatar là URL từ bên ngoài -->
                            <img src="{{ $client->avatar }}" alt="avatar" class="rounded-circle" width="50" height="50">
                        @else
                            <!-- Nếu avatar được lưu trong public/storage/avatars -->
                            <img src="{{ asset('storage/avatars/'.$client->avatar) }}" alt="avatar" class="rounded-circle" width="50" height="50">
                        @endif
                    @else
                        <!-- Avatar mặc định nếu không có -->
                        <img src="{{ asset('storage/avatars/default-avatar.png') }}" alt="default avatar" class="rounded-circle" width="50" height="50">
                    @endif
                </td>

                <td>{{ $client->name }}</td>
                <td>{{ $client->email }}</td>
                <td>{{ $client->phone }}</td>
                <td>{{ $client->address }}</td>
                <td>{{ $client->note }}</td>

                <td class="text-center">


                    <form id="delete-client-form-{{ $client->user_id }}" action="{{ route('client.destroy', $client->user_id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-sm btn-danger" onclick="confirmDeleteClient('{{ $client->user_id }}')">
                            <i class="bi bi-trash"></i> Delete
                        </button>
                    </form>

                    {{-- <form action="{{ route('admin.update_to_admin', $client->user_id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-warning me-1" disabled>
                            <i class="bi bi-arrow-up-circle"></i> Update to Admin
                        </button>
                    </form> --}}

                </td>



            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Phân trang -->
    <div class="d-flex justify-content-center mt-4">
        {{ $clients->links('pagination::bootstrap-5') }}
    </div>



@endsection

<script>
    function confirmDeleteClient(userId) {
        Swal.fire({
            title: 'Are you sure?',
            text: "This will move the client to the blacklist and restrict their access!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete client!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-client-form-' + userId).submit();
            }
        })
    }
</script>

<script>
    function confirmDeleteClient(userId) {
        Swal.fire({
            title: 'Are you sure?',
            text: "This will move the client to the blacklist and restrict their access!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete client!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-client-form-' + userId).submit();
            }
        })
    }
</script>
