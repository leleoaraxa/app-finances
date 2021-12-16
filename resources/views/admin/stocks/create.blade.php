@extends('admin.layouts.app')

@section('title', 'Stocks Create')

@section('content')
    <h1>Create a new Stock</h1>

    <form action="{{ route('stocks.store') }}" method="post">
        @include('admin.stocks._partials.form')
    </form>
@endsection
