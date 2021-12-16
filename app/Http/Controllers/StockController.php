<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateStock;
use App\Models\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class StockController extends Controller
{
    public function index()
    {
        $stocks = Stock::latest()->paginate();

        return view('admin.stocks.index', compact('stocks'));
    }

    public function create()
    {
        return view('admin.stocks.create');
    }

    public function store(StoreUpdateStock $request)
    {
        $data = $request->all();

        if ($request->image->isValid()) {
            $nameImage = $request->symbol . '.' . $request->image->getClientOriginalExtension();
            $image = $request->image->storeAs('stocks', $nameImage, 'public');
            $data['image'] = $image;
        }

        Stock::create($data);

        return redirect()
                ->route('stocks.index')
                ->with('message', 'Stock Successfully Created!');
    }

    public function show($symbol)
    {
        if (!$stock = Stock::where('symbol', $symbol)->first())
            return redirect()->route('stocks.index');

        return view('admin.stocks.show', compact('stock'));
    }

    public function destroy($symbol)
    {
        if (!$stock = Stock::where('symbol', $symbol)->first())
            return redirect()->route('stocks.index');

        $stock->delete();

        return redirect()
                ->route('stocks.index')
                ->with('message', 'Stock Successfully Deleted!');
    }

    public function edit($symbol)
    {
        if (!$stock = Stock::where('symbol', $symbol)->first())
            return redirect()->route('stocks.index');

        return view('admin.stocks.edit', compact('stock'));
    }

    public function update(StoreUpdateStock $request, $symbol)
    {
        if (!$stock = Stock::where('symbol', $symbol)->first())
            return redirect()->route('stocks.index');

        $stock->update($request->all());

        return redirect()
                ->route('stocks.index')
                ->with('message', 'Stock Successfully Updated!');
    }

    public function search(Request $request)
    {
        $filters = $request->except('_token');

        $stocks = Stock::where('symbol', $request->search)
                    ->orWhere('name', 'LIKE', "%{$request->search}%")
                    ->paginate();

        return view('admin.stocks.index', compact('stocks', 'filters'));
    }
}
