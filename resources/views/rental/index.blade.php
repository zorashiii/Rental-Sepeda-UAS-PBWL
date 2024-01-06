@extends('layouts.app')
@section('content') 

<h2>Rental</h2>

<a href="{{ route('rental_create') }}" class="btn btn-primary mb-3 float-end"><i class="fa-solid fa-plus"></i> Add Data Rental</a>

<table class="table table-success table-striped">
    <tr>
        <th>NO</th>
        <th>NAMA CUST</th>
        <th>MERK SEPEDA</th>
        <th>TGL RENTAL</th>
        <th>TGL KEMBALI</th>
        <th>HARI</th>
        <th>TOTAL HARGA</th>
        <th>USER</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr> 

    @php
        $counter = 1; // Inisialisasi variabel counter
    @endphp

    @foreach ($rows as $row)
        <tr>
            <td>{{ $counter++ }}</td>
            <td>{{ $row->customer->nama }}</td>
            <td>{{ $row->bicycle->merk }}</td>
            <td>{{ $row->tgl_rent }}</td>
            <td>{{ $row->tgl_kembali }}</td>
            <td>{{ $row->hari }}</td>
            <td>{{ $row->total_harga }}</td>
            <td>{{ $row->user->name }}</td>
            <td><a href="{{ url('rental/edit/' . $row->id) }}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i>Edit</a></td>
            <td>
                <form action="{{ route('rental_delete', ['id' => $row->id]) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger"><i class="fa-solid fa-delete-left"></i>Delete
                    </button>
                </form>
            </td>
        </tr>
    @endforeach

</table>

@endsection
