@extends('layouts.app')
@section('content')

<h2>Sepeda</h2>

<a href="{{ url('bicycle/create') }}" class="btn btn-primary mb-3 float-end"><i class="fa-solid fa-plus"></i> Add Sepeda</a>


<table class="table table-success table-striped">
    <tr>
        <th>NO</th>
        <th>MERK</th>
        <th>TIPE</th>
        <th>HARGA</th>
        <th>STATUS</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr> 

    @php
        $counter = 1; // Inisialisasi variabel counter
    @endphp

    @foreach ($rows as $row)
        <tr>
            <td>{{ $counter++ }}</td>
            <td>{{ $row->merk }}</td>
            <td>{{ $row->tipe }}</td>
            <td>{{ $row->harga }}</td>
            <td>{{ $row->status }}</td>
            <td><a href="{{ url('bicycle/edit/' . $row->id) }}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Edit</a></td>
            <td>
                <form action="{{ url('bicycle/' . $row->id) }}" method="post">
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
