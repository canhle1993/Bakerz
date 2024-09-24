<!-- resources/views/search-results.blade.php -->
@extends('layouts.main') <!-- Kế thừa từ layout 'main.blade.php' -->

@section('title', 'Search Results') <!-- Tùy chỉnh tiêu đề trang -->

@section('content')
    <h2>Search results for "{{ $query }}"</h2>

    @if ($results->isEmpty())
        <p>No results found.</p>
    @else
        <ul>
            @foreach ($results as $result)
                <li>{{ $result->product_name }} - {{ $result->price }} VND</li>
            @endforeach
        </ul>
    @endif
@endsection
