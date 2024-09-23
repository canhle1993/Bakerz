@extends('admin.dashboard')

@section('manage_client_edit')
<style>
    .form-container {
        background: url('https://images.pexels.com/photos/291528/pexels-photo-291528.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1') no-repeat center center;
        background-size: cover;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        max-width: 600px;
        margin: auto;
        color: white;
    }

    .form-container h1 {
        text-align: center;
        color: white;
    }

    .form-container .form-label {
        color: white;
    }

    .form-container input,
    .form-container select,
    .form-container textarea {
        background-color: rgba(255, 255, 255, 0.8); /* Slight transparency for inputs */
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
        color: black;
    }

    .form-container button {
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        border: none;
        border-radius: 5px;
        color: white;
        font-size: 16px;
    }

    .form-container button:hover {
        background-color: #0056b3;
    }

    body {
        background-color: #000; /* Ensure the body background remains dark */
    }
</style>

<div class="form-container mt-5">
    <h1>Edit Client</h1>
    <form action="{{ route('client.update', $client->user_id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $client->name }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $client->email }}" required>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ $client->phone }}">
        </div>

        <div class="mb-3">
            <label for="gender" class="form-label">Gender</label>
            <select name="gender" class="form-control">
                <option value="">Select Gender</option>
                <option value="1" {{ $client->gender == 1 ? 'selected' : '' }}>Male</option>
                <option value="0" {{ $client->gender == 0 ? 'selected' : '' }}>Female</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ $client->address }}">
        </div>

        <div class="mb-3">
            <label for="note" class="form-label">Note</label>
            <textarea class="form-control" id="note" name="note">{{ $client->note }}</textarea>
        </div>

        <div class="mb-3">
            <label for="avatar" class="form-label">Avatar</label>
            <input type="file" class="form-control" id="avatar" name="avatar">
            @if($client->avatar)
                <img src="{{ asset('storage/avatars/'.$client->avatar) }}" alt="avatar" class="mt-3" width="50">
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Update Client</button>
    </form>
</div>
@endsection
