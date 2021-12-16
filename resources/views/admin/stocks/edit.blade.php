<h1>Stock Edit {{ $stock->symbol }}</h1>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('stocks.update', $stock->symbol) }}" method="post">
    @csrf
    @method('put')
    <input type="text" name="symbol" id="symbol" placeholder="Symbol" value="{{ $stock->symbol }}">
    <input type="text" name="name" id="name" placeholder="Name" value="{{ $stock->name }}">
    <input type="text" name="exchange" id="exchange" placeholder="Exchange" value="{{ $stock->exchange }}">
    <input type="text" name="currency" id="currency" placeholder="Currency" value="{{ $stock->currency }}">
    <input type="text" name="datetime" id="datetime" placeholder="Datetime" value="{{ $stock->datetime }}">
    <input type="text" name="open" id="open" placeholder="Open" value="{{ $stock->open }}">
    <input type="text" name="high" id="high" placeholder="High" value="{{ $stock->high }}">
    <input type="text" name="low" id="low" placeholder="Low" value="{{ $stock->low }}">
    <input type="text" name="close" id="close" placeholder="Close" value="{{ $stock->close }}">
    <input type="text" name="volume" id="volume" placeholder="Volume" value="{{ $stock->volume }}">
    <input type="text" name="previous_close" id="previous_close" placeholder="Previous Close" value="{{ $stock->previous_close }}">
    <input type="text" name="change" id="change" placeholder="Change" value="{{ $stock->change }}">
    <input type="text" name="average_volume" id="average_volume" placeholder="Average Volume" value="{{ $stock->average_volume }}">
    <button type="submit">Send</button>
</form>
