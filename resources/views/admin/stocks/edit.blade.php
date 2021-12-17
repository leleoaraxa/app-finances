@extends('admin.layouts.app')

@section('title', 'Stocks Edit')

@section('content')
    <h1 class="text-center text-3x1 uppercase font-black my-4">Stock Edit {{ $stock->symbol }}</h1>

    <div class="w-11/12 p-12 bg-white sm:w-8/12 lg:w-5/12 mx-auto">
        <form action="{{ route('stocks.update', $stock->symbol) }}" method="post" enctype="multipart/form-data">
            @method('put')
            @include('admin.stocks._partials.form')
        </form>
    </div>
@endsection
