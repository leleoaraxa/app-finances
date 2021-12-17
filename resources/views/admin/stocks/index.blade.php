@extends('admin.layouts.app')

@section('title', 'Stocks List')

@section('content')
    <h1 class="text-center text-3x1 uppercase font-black my-4">Stocks</h1>

    <div class="w-11/12 p-12 bg-white sm:w-8/12 lg:w-5/12 mx-auto">
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

        <hr>
        @foreach ($stocks as $stock)
            <p>
                <img src="{{ url("storage/{$stock->image}") }}" alt="{{ $stock->symbol }}" style="height:24px;width:80px;">
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
    </div>
@endsection
