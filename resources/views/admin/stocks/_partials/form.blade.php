@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

@csrf
<input type="file" name="image" id="image">
<input type="text" name="symbol" id="symbol" placeholder="Symbol" value="{{ $stock->symbol ?? old('symbol') }}">
<input type="text" name="name" id="name" placeholder="Name" value="{{ $stock->name ?? old('name') }}">
<input type="text" name="exchange" id="exchange" placeholder="Exchange" value="{{ $stock->exchange ?? old('exchange') }}">
<input type="text" name="currency" id="currency" placeholder="Currency" value="{{ $stock->currency ?? old('currency') }}">
<button type="submit">Send</button>
