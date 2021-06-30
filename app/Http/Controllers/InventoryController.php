<?php

namespace App\Http\Controllers;

use App\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'merk' => 'required',
            'produk' => 'required'
        ]);

        Inventory::create($request->only(['merk', 'produk']));

        return response()->json(['Inventory inserted successfully']);
    }
}
