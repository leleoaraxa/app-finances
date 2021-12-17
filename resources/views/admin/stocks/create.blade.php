@extends('admin.layouts.app')

@section('title', 'Stocks Create')

@section('content')
    <h1 class="text-center text-3x1 uppercase font-black my-4">Create a new Stock</h1>

    <div class="w-11/12 p-12 bg-white sm:w-8/12 lg:w-5/12 mx-auto">
        <form action="{{ route('stocks.store') }}" method="post" enctype="multipart/form-data">
            @include('admin.stocks._partials.form')
        </form>
    </div>
@endsection
