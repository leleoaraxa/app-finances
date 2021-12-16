@extends('admin.layouts.app')

@section('title', 'Stocks View')

@section('content')
    <h1>Stock Details {{ $stock->symbol }}</h1>

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
@endsection
