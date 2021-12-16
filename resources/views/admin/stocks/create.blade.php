<h1>Create a new Stock</h1>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('stocks.store') }}" method="post">
    @csrf
    <input type="text" name="symbol" id="symbol" placeholder="Symbol" value="{{ old('symbol') }}">
    <input type="text" name="name" id="name" placeholder="Name" value="{{ old('name') }}">
    <input type="text" name="exchange" id="exchange" placeholder="Exchange" value="{{ old('exchange') }}">
    <input type="text" name="currency" id="currency" placeholder="Currency" value="{{ old('currency') }}">
    <input type="text" name="datetime" id="datetime" placeholder="Datetime" value="{{ old('datetime') }}">
    <input type="text" name="open" id="open" placeholder="Open" value="{{ old('open') }}">
    <input type="text" name="high" id="high" placeholder="High" value="{{ old('high') }}">
    <input type="text" name="low" id="low" placeholder="Low" value="{{ old('low') }}">
    <input type="text" name="close" id="close" placeholder="Close" value="{{ old('close') }}">
    <input type="text" name="volume" id="volume" placeholder="Volume" value="{{ old('volume') }}">
    <input type="text" name="previous_close" id="previous_close" placeholder="Previous Close" value="{{ old('previous_close') }}">
    <input type="text" name="change" id="change" placeholder="Change" value="{{ old('change') }}">
    <input type="text" name="average_volume" id="average_volume" placeholder="Average Volume" value="{{ old('average_volume') }}">
    <button type="submit">Send</button>
</form>
