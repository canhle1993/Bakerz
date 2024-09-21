@extends('admin.dashboard')

@section('manage_client')

<div class="container">
    <h1>Client Management</h1>
    <a href="{{ route('client.create') }}" class="btn btn-primary mb-3">Add Client</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Note</th>
                <th>Avatar</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
            <tr>
                <td>{{ $client->name }}</td>
                <td>{{ $client->email }}</td>
                <td>{{ $client->phone }}</td>
                <td>{{ $client->address }}</td>
                <td>{{ $client->note }}</td>
                <td><img src="{{ asset('storage/'.$client->avatar) }}" alt="avatar" width="50"></td>
                <td>
                    <a href="{{ route('manage-client.edit', $client->user_id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('manage-client.destroy', $client->user_id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
