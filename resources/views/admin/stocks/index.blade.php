<a href="{{ route('stocks.create') }}">Create a new Stock</a>
<hr>
@if (session('message'))
    <div>
        {{ session('message') }}
    </div>
@endif
<h1>Stocks</h1>
<hr>
@foreach ($stocks as $stock)
    <p>
        {{ $stock->symbol }} - {{ $stock->name }}
        [ <a href="{{ route('stocks.show', $stock->symbol) }}">View</a> ]
    </p>
@endforeach
