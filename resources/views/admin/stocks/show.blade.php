<h1>Stock Details {{ $stock->symbol }}</h1>

<ul>
    <li>{{ $stock->symbol }}</li>
    <li>{{ $stock->name }}</li>
    <li>{{ $stock->exchange }}</li>
    <li>{{ $stock->currency }}</li>
    <li>{{ $stock->datetime }}</li>
    <li>{{ $stock->open }}</li>
    <li>{{ $stock->high }}</li>
    <li>{{ $stock->low }}</li>
    <li>{{ $stock->close }}</li>
    <li>{{ $stock->volume }}</li>
    <li>{{ $stock->previous_close }}</li>
    <li>{{ $stock->change }}</li>
    <li>{{ $stock->average_volume }}</li>
</ul>
