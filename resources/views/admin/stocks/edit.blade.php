@extends('admin.layouts.app')

@section('title', 'Stocks Edit')

@section('content')
    <h1>Stock Edit {{ $stock->symbol }}</h1>

    <form action="{{ route('stocks.update', $stock->symbol) }}" method="post" enctype="multipart/form-data">
        @method('put')
        @include('admin.stocks._partials.form')
    </form>
@endsection
