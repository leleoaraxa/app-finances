<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateStock;
use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index()
    {
        $stocks = Stock::all();

        return view('admin.stocks.index', compact('stocks'));
    }

    public function create()
    {
        return view('admin.stocks.create');
    }

    public function store(StoreUpdateStock $request)
    {
        Stock::create($request->all());

        return redirect()->route('stocks.index');
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
            ->with('message', 'Stock Successfully Deleted');
    }
}
