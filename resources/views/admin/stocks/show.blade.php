<h1>Stock Details {{ $stock->symbol }}</h1>

<ul>
    <li><strong>Symbol: </strong>{{ $stock->symbol }}</li>
    <li><strong>Name: </strong>{{ $stock->name }}</li>
    <li><strong>Exchange: </strong>{{ $stock->exchange }}</li>
    <li><strong>Currency: </strong>{{ $stock->currency }}</li>
    <li><strong>Datetime: </strong>{{ $stock->datetime }}</li>
    <li><strong>Open: </strong>{{ $stock->open }}</li>
    <li><strong>High: </strong>{{ $stock->high }}</li>
    <li><strong>Low: </strong>{{ $stock->low }}</li>
    <li><strong>Close: </strong>{{ $stock->close }}</li>
    <li><strong>Volume: </strong>{{ $stock->volume }}</li>
    <li><strong>Previous Close: </strong>{{ $stock->previous_close }}</li>
    <li><strong>Change: </strong>{{ $stock->change }}</li>
    <li><strong>Average Volume: </strong>{{ $stock->average_volume }}</li>
</ul>

<form action="{{ route('stocks.destroy', $stock->symbol) }}" method="post">
    @csrf
    @method('delete')
    <button type="submit">Delete Stock: {{ $stock->symbol }}</button>
</form>
