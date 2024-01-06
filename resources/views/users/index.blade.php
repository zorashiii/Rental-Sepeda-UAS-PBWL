@extends('layouts.app')
@section('content')

<h2>Users</h2>

<a href="{{ url('users/create') }}" class="btn btn-primary mb-3 float-end"><i class="fa-solid fa-person-circle-plus"></i> Add Users</a>


<table class="table table-success table-striped">
    <tr>
        <th>NO</th>
        <th>NAMA</th>
        <th>EMAIL</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr> 

    @php
        $counter = 1; // Inisialisasi variabel counter
    @endphp

    @foreach ($rows as $row)
        <tr>
            <td>{{ $counter++ }}</td>
            <td>{{ $row->name }}</td>
            <td>{{ $row->email }}</td>
            <td><a href="{{ url('users/edit/' . $row->id) }}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Edit</a></td>
            <td>
                <form action="{{ url('users/' . $row->id) }}" method="post">
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
