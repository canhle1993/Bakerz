@extends('admin.dashboard')

@section('manage_client_create')
<style>
    .form-container {
        background: url('https://i.pinimg.com/564x/d6/e0/95/d6e0957a44d11d542d03abafd16e8234.jpg') no-repeat center center;
        background-size: cover;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        max-width: 600px;
        margin: auto;
        color: white;
    }

    /* Tiêu đề nổi bật */
    .form-container h1 {
        text-align: center;
        font-size: 2.5rem;
        color: #f8f9fa;
        text-transform: uppercase;
        font-weight: bold;
        letter-spacing: 3px;
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
    }

    .form-container .form-label {
        color: white;
    }

    .form-container input,
    .form-container select,
    .form-container textarea {
        background-color: rgba(255, 255, 255, 0.8);
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
        color: black;
    }

    /* Button hoành tráng */
    .form-container button {
        width: 100%;
        padding: 15px;
        background-color: #ff5722;
        border: none;
        border-radius: 50px;
        color: white;
        font-size: 1.5rem;
        font-weight: bold;
        letter-spacing: 2px;
        transition: all 0.3s ease;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    }

    .form-container button:hover {
        background-color: #ff7043;
        transform: scale(1.05);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
    }

    body {
        background-color: #000;
    }

    .error {
        color: #ff6b6b;
        font-size: 0.875rem;
        margin-top: 5px;
    }
</style>

<div class="form-container mt-5">
    <h1>Add Client</h1>

    <!-- Hiển thị lỗi validate -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('client.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
            <!-- Hiển thị lỗi cho trường name -->
            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
            <!-- Hiển thị lỗi cho trường email -->
            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
            <!-- Hiển thị lỗi cho trường password -->
            @error('password')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}">
            <!-- Hiển thị lỗi cho trường phone -->
            @error('phone')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="gender" class="form-label">Gender</label>
            <select name="gender" class="form-control">
                <option value="">Select Gender</option>
                <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
            </select>
            <!-- Hiển thị lỗi cho trường gender -->
            @error('gender')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}">
            <!-- Hiển thị lỗi cho trường address -->
            @error('address')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="avatar" class="form-label">Upload Avatar (from local)</label>
            <input type="file" class="form-control" id="avatar" name="avatar">
            <!-- Hiển thị lỗi cho trường avatar -->
            @error('avatar')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="avatar_url" class="form-label">Avatar URL (optional)</label>
            <input type="url" class="form-control" id="avatar_url" name="avatar_url" placeholder="Enter image URL" value="{{ old('avatar_url') }}">
            <!-- Hiển thị lỗi cho trường avatar_url -->
            @error('avatar_url')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Add Client</button>
    </form>
</div>
@endsection
