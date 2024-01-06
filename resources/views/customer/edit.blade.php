@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>Edit Customer</h2>
                </div>

                <div class="card-body">
                    <form action="{{ url('customer/' . $row->id) }}" method="post">
                        <input type="hidden" name="_method" value="PATCH">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="name">Nama</label>
                            <input type="text" name="nama" id="name" class="form-control" value="{{ $row->nama }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" value="{{ $row->email }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="inputNotelp" class="form-label">No Telp</label>
                            <input type="text" name="no_telp" class="form-control" value="{{ $row->no_telp }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="inputAlamat" class="form-label">Alamat</label>
                            <input type="text-area" name="alamat" class="form-control" value="{{ $row->alamat }}" required>
                        </div>
                        <div class="mb-3">
                            <input type="submit" value="UPDATE" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
