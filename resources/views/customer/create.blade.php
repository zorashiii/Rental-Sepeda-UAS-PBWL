@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Add Customer</h2></div>

                <div class="card-body">
                    <form action="{{ url('customer') }}" method="post">
                        @csrf

                        <div class="mb-3">
                            <label for="inputNama" class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" required>
                        </div>

                        <div class="mb-3">
                            <label for="inputEmail" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Masukkan Email" required>
                        </div>

                        <div class="mb-3">
                            <label for="inputNotelp" class="form-label">No Telp</label>
                            <input type="text" name="no_telp" class="form-control" placeholder="Masukkan No Telp" required>
                        </div>

                        <div class="mb-3">
                            <label for="inputAlamat" class="form-label">Alamat</label>
                            <input type="text-area" name="alamat" class="form-control" placeholder="Masukkan Alamat" required>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">SUBMIT</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
