<h1>Stock Edit {{ $stock->symbol }}</h1>

<form action="{{ route('stocks.update', $stock->symbol) }}" method="post">
    @method('put')
    @include('admin.stocks._partials.form')
</form>
