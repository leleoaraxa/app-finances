<a href="{{ route('stocks.create') }}">Create a new Stock</a>
<hr>
<h1>Stocks</h1>
<hr>
@foreach ($stocks as $stock)
    <p>{{ $stock->symbol }} - {{ $stock->name }} </p>
@endforeach
