<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Stock;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stocks = Stock::all()->toArray();
        return view('stocks.index', compact('stocks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stocks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'product_id' => 'required',
            'section' => 'required',
            'category' => 'required',
            'product' => 'required',
            'total_stock' => 'required',
            'total_assign.required' => 'Assign Stock should be less than the Total Stock',
        ]);
        $stocks = new Stock ([
            'product_id' => $request->get('product_id'),
            'section' => $request->get('section'),
            'category' => $request->get('category'),
            'product' => $request->get('product'),
            'total_stock' => $request->get('total_stock'),
            'total_assign' => $request->get('total_assign'),
        ]);
        $stocks->save();
        return redirect()->route('stocks.index')->with('Successful','Products Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stock = Stock::find($id);
        return view('stocks.edit', compact('stock','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'product_id' => 'required',
            'section' => 'required',
            'category' => 'required',
            'product' => 'required',
            'total_stock' => 'required',
            'total_assign.required' => 'Assign Stock should be less than the Total Stock',
        ]);
        $stock = Stock::find($id);
        $stock->product_id = $request->get('product_id');
        $stock->section = $request->get('section');
        $stock->category = $request->get('category');
        $stock->product = $request->get('product');
        $stock->total_stock = $request->get('total_stock');
        $stock->total_assign = $request->get('total_assign');
        $stock->save();
        return redirect()->route('stocks.index')->with('Successful','Stock Details Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stock = Stock::find($id);
        $stock->delete();
        return redirect()->route('stocks.index')->with('Successful','Stocks Details Deleted');
    }
}
