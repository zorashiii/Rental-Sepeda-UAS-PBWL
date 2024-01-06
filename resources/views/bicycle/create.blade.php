@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Add Sepeda</h2></div>

                <div class="card-body">
                    <form action="{{ url('bicycle') }}" method="post">
                        @csrf

                        <div class="mb-3">
                            <label for="inputmerk" class="form-label">Merk</label>
                            <input type="merk" name="merk" class="form-control" placeholder="Masukkan Merk Sepeda" required>
                        </div>

                        <div class="mb-3">
                            <label for="inputTipe" class="form-label">Tipe</label>
                            <input type="text" name="tipe" class="form-control" placeholder="Masukkan Tipe Sepeda" required>
                        </div>

                        <div class="mb-3">
                            <label for="inputHarga" class="form-label">Harga</label>
                            <input type="text" name="harga" class="form-control" placeholder="Masukkan Harga Sepeda" required>
                        </div>

                        <div class="mb-3">
                            <label for="inputStatus">Status</label>
                            <select name="status" class="form-select" required>
                                <option value="">Pilih Status</option>
                                <option value="Y">Available</option>
                                <option value="N">Not Available</option>
                            </select>
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
