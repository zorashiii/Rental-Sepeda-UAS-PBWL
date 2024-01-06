@extends('layouts.app')
@section('content')

<h2>Customer</h2>

<a href="{{ url('customer/create') }}" class="btn btn-primary mb-3 float-end"><i class="fa-solid fa-person-circle-plus"></i> Add Customer</a>


<table class="table table-success table-striped">
    <tr>
        <th>NO</th>
        <th>NAMA</th>
        <th>EMAIL</th>
        <th>NO TELP</th>
        <th>ALAMAT</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr> 

    @php
        $counter = 1; // Inisialisasi variabel counter
    @endphp

    @foreach ($rows as $row)
        <tr>
            <td>{{ $counter++ }}</td>
            <td>{{ $row->nama }}</td>
            <td>{{ $row->email }}</td>
            <td>{{ $row->no_telp }}</td>
            <td>{{ $row->alamat }}</td>
            <td><a href="{{ url('customer/edit/' . $row->id) }}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Edit</a></td>
            <td>
                <form action="{{ url('customer/' . $row->id) }}" method="post">
                    <input type="hidden" name="_method" value="DELETE">
                    @csrf
                    <button type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                        <i class="fa-solid fa-delete-left"></i> Delete
                    </button>
                </form>
            </td>
        </tr>
    @endforeach

</table>

@endsection
