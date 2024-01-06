<?php

namespace App\Http\Controllers;

use App\Models\Bicycle;
use App\Models\Customer;
use App\Models\Rental;
use App\Models\User;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Rental::with('bicycle')->with('customer')->with('user')->get();

        return view('rental.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $bicycle = Bicycle::all();
        $customer = Customer::all();
        $users = User::all();

        return view('rental.create', compact('bicycle', 'customer', 'users'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $row = $request->validate([
            'cust_id'=> 'required',
            'spd_id'=> 'required',
            'tgl_rent'=> 'required',
            'tgl_kembali'=> 'required',
            'hari'=> 'required',
            'total_harga'=> 'required',
            'user_id'=> 'required',

        ]);

        //menyimpan data pelanggan
        $rental = new Rental($row);
        $rental->save();
        return redirect()->route('rental');

        

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
        $bicycle = Bicycle::all();
        $customer = Customer::all();
        $users = User::all();

        $row = Rental::find($id);
        return view('rental.edit', compact('row', 'bicycle', 'customer', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = $request->validate([
            'cust_id'=> 'required',
            'spd_id'=> 'required',
            'tgl_rent'=> 'required',
            'tgl_kembali'=> 'required',
            'hari'=> 'required',
            'total_harga'=> 'required',
            'user_id'=> 'required',
        ]);

        Rental::whereId($id)->update($row);
        return redirect()->route('rental');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Rental::find($id);
        $row->delete();
        return redirect()->route('rental');
    }
}
