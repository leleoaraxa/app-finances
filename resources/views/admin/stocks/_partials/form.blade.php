@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

@csrf
<input type="text" name="symbol" id="symbol" placeholder="Symbol" value="{{ $stock->symbol ?? old('symbol') }}">
<input type="text" name="name" id="name" placeholder="Name" value="{{ $stock->name ?? old('name') }}">
<input type="text" name="exchange" id="exchange" placeholder="Exchange" value="{{ $stock->exchange ?? old('exchange') }}">
<input type="text" name="currency" id="currency" placeholder="Currency" value="{{ $stock->currency ?? old('currency') }}">
<input type="text" name="datetime" id="datetime" placeholder="Datetime" value="{{ $stock->datetime ?? old('datetime') }}">
<input type="text" name="open" id="open" placeholder="Open" value="{{ $stock->open ?? old('open') }}">
<input type="text" name="high" id="high" placeholder="High" value="{{ $stock->high ?? old('high') }}">
<input type="text" name="low" id="low" placeholder="Low" value="{{ $stock->low ?? old('low') }}">
<input type="text" name="close" id="close" placeholder="Close" value="{{ $stock->close ?? old('close') }}">
<input type="text" name="volume" id="volume" placeholder="Volume" value="{{ $stock->volume ?? old('volume') }}">
<input type="text" name="previous_close" id="previous_close" placeholder="Previous Close" value="{{ $stock->previous_close ?? old('previous_close') }}">
<input type="text" name="change" id="change" placeholder="Change" value="{{ $stock->change ?? old('change') }}">
<input type="text" name="average_volume" id="average_volume" placeholder="Average Volume" value="{{ $stock->average_volume ?? old('average_volume') }}">
<button type="submit">Send</button>
