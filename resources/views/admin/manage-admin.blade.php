@extends('admin.dashboard')

@section('manage_admin')
<style>
.pagination {
    display: flex;
    justify-content: center;
    padding-left: 0;
    list-style: none;
    border-radius: 0.25rem;
}

.pagination .page-item {
    margin: 0 5px;
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
    transform: scale(1.1);
    color: #fff;
    background-color: #f80808;
    box-shadow: 0px 4px 10px rgba(0, 123, 255, 0.3);
}

/* Lower to Client button */
.btn-lower {
    background-color: #ffc107;
    color: #000;
    border: none;
    transition: all 0.3s ease-in-out;
}

.btn-lower:hover {
    background-color: #e0a800;
    color: #fff;
    box-shadow: 0px 4px 10px rgba(224, 168, 0, 0.5);
    transform: scale(1.05);
}

/* Delete button */
.btn-danger {
    background-color: #dc3545;
    color: #fff;
    border: none;
    transition: all 0.3s ease-in-out;
}

.btn-danger:hover {
    background-color: #c82333;
    box-shadow: 0px 4px 10px rgba(200, 35, 51, 0.5);
    transform: scale(1.05);
}


.btn-success {
    background-color: #28a745;
    color: #fff;
    border: none;
    transition: all 0.3s ease-in-out;
}

.btn-success:hover {
    background-color: #218838;
    box-shadow: 0px 4px 10px rgba(40, 167, 69, 0.5);
    transform: scale(1.05);
}
.custom-alert {
    position: fixed;
    top: 10%;
    left: 50%;
    right: 10%;
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
@if ($errors->any())
<div id="custom-alert" class="custom-alert alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    <button class="close-btn" onclick="closeAlert()">×</button>
</div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const alert = document.getElementById('custom-alert');
            alert.style.backgroundColor = "#f0d8da";
            alert.style.color = "red";
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
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="text-primary">Admin Management</h1>
            <button class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#addAdminModal">Add Admin</button>
            {{-- <a href="{{ route('admin.create') }}" class="btn btn-primary">Add Admin</a> --}}
    </div>
<!-- Modal  add admin-->
<div class="modal fade" id="addAdminModal" tabindex="-1" aria-labelledby="addAdminModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addAdminModalLabel">Add New Admin</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required placeholder="Enter name" value="{{ old('name') }}">
                       
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" required placeholder="Enter email" value="{{ old('email') }}">
                        
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required placeholder="Enter password">
                        
                    </div>
                    <div class="mb-3">
                        <label for="confirm_password" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" name="password_confirmation" id="confirm_password" required placeholder="Confirm password" value="{{ old('password_confirmation') }}">
                        
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone number (optional)" value="{{ old('phone') }}">
                        
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender</label>
                        <select class="form-control" id="gender" name="gender">
                            <option value="">Select Gender</option>
                            <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                            <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                        </select>
                        
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Enter address (optional)" value="{{ old('address') }}">
                        
                    </div>
                    <div class="mb-3">
                        <label for="avatar" class="form-label">Avatar (optional)</label>
                        <input type="file" class="form-control" id="avatar" name="avatar" accept="image/*">
                       
                    </div>
                    <div class="mb-3">
                        <label for="avatar_url" class="form-label">Avatar URL (optional)</label>
                        <input type="url" class="form-control" id="avatar_url" name="avatar_url" placeholder="Enter avatar URL (optional)" value="{{ old('avatar_url') }}">
                       
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Register Admin</button>
                </div>
            </form>
        </div>
    </div>
</div>
    <table class="table table-hover table-bordered table-striped shadow-sm">
        <thead class="table-dark">
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
            @foreach ($admins as $admin)
            <tr>
                <td class="text-center">
                    @if($admin->avatar)
                        @if (filter_var($admin->avatar, FILTER_VALIDATE_URL))
                            <img src="{{ $admin->avatar }}" alt="avatar" class="rounded-circle" width="50" height="50">
                        @else
                            <img src="{{ asset('storage/avatars/'.$admin->avatar) }}" alt="avatar" class="rounded-circle" width="50" height="50">
                        @endif
                    @else
                        <img src="{{ asset('storage/avatars/default-avatar.png') }}" alt="default avatar" class="rounded-circle" width="50" height="50">
                    @endif
                </td>

                <td>{{ $admin->name }}</td>
                <td>{{ $admin->email }}</td>
                <td>{{ $admin->phone }}</td>
                <td>{{ $admin->address }}</td>
                <td>{{ $admin->note }}</td>

                <td class="text-center">
                    <!-- Button to lower admin role to client -->
                    <form action="{{ route('admin.lower_to_client', $admin->user_id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-lower">
                            <i class="bi bi-arrow-down-circle"></i> Lower to Client
                        </button>
                    </form>

                    <form action="{{ route('admin.destroy', $admin->user_id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">
                            <i class="bi bi-trash"></i> Delete
                        </button>
                    </form>

                    <!-- Button to up admin role to super -->
                    <form action="{{ route('admin.up_to_super', $admin->user_id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-success">
                            <i class="bi bi-arrow-up-circle"></i> Up to Supper
                        </button>
                    </form>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-4">
        {{ $admins->links('pagination::bootstrap-5') }}
    </div>

@endsection