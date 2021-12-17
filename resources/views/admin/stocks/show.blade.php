@extends('admin.layouts.app')

@section('title', 'Stocks View')

@section('content')
    <h1 class="text-center text-3x1 uppercase font-black my-4">Stock Details {{ $stock->symbol }}</h1>

    <div class="w-11/12 p-12 bg-white sm:w-8/12 lg:w-5/12 mx-auto">
        <ul>
            <li><strong>Symbol: </strong>{{ $stock->symbol }}</li>
            <li><strong>Name: </strong>{{ $stock->name }}</li>
            <li><strong>Exchange: </strong>{{ $stock->exchange }}</li>
            <li><strong>Currency: </strong>{{ $stock->currency }}</li>
        </ul>

        <form action="{{ route('stocks.destroy', $stock->symbol) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Delete Stock: {{ $stock->symbol }}</button>
        </form>
    </div>
@endsection
