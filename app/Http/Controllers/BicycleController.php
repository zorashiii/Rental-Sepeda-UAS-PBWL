<?php

namespace App\Http\Controllers;

use App\Models\Bicycle;
use Illuminate\Http\Request;

class BicycleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Bicycle::get();
        return view('bicycle.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bicycle.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $row['merk'] = $request->merk;
        $row['tipe'] = $request->tipe;
        $row['harga'] = $request->harga;
        $row['status'] = $request->status;

       Bicycle::create($row);
        return redirect('bicycle');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = Bicycle::find($id);
        return view('bicycle.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row['merk'] = $request->merk;
        $row['tipe'] = $request->tipe;
        $row['harga'] = $request->harga;
        $row['status'] = $request->status;

        Bicycle::whereId($id)->update($row);
        return redirect('bicycle');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Bicycle::find($id);
        $row->delete();
        return redirect('bicycle');
    }
}
