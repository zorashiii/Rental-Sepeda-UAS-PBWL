<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Customer::get();
        return view('customer.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $row['nama'] = $request->nama;
        $row['email'] = $request->email;
        $row['no_telp'] = $request->no_telp;
        $row['alamat'] = $request->alamat;

       Customer::create($row);
        return redirect('customer');
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
        $row = Customer::find($id);
        return view('customer.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row['nama'] = $request->nama;
        $row['email'] = $request->email;
        $row['no_telp'] = $request->no_telp;
        $row['alamat'] = $request->alamat;


        Customer::whereId($id)->update($row);
        return redirect('customer');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Customer::find($id);
        $row->delete();
        return redirect('customer');
    }
}
