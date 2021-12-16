@extends('admin.layouts.app')

@section('title', 'Stocks List')

@section('content')
    <a href="{{ route('stocks.create') }}">Create a new Stock</a>
    <hr>
    @if (session('message'))
        <div>
            {{ session('message') }}
        </div>
    @endif

    <form action="{{ route('stocks.search') }}" method="post">
        @csrf
        <input type="text" name="search" placeholder="Search...">
        <button type="submit">Filter</button>
    </form>

    <h1>Stocks</h1>

    @foreach ($stocks as $stock)
        <p>
            <img src="{{ url("storage/{$stock->image}") }}" alt="{{ $stock->symbol }}">
            {{ $stock->symbol }} - {{ $stock->name }}
            [
                <a href="{{ route('stocks.show', $stock->symbol) }}">View</a> |
                <a href="{{ route('stocks.edit', $stock->symbol) }}">Edit</a>
            ]
        </p>
    @endforeach

    <hr>

    @if (isset($filters))
        {{ $stocks->appends($filters)->links() }}
    @else
        {{ $stocks->links() }}
    @endif

@endsection
