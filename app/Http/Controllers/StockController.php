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
}
