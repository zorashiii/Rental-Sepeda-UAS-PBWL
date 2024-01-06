@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>Edit Bicycle</h2>
                </div>

                <div class="card-body">
                    <form action="{{ url('bicycle/' . $row->id) }}" method="post">
                        <input type="hidden" name="_method" value="PATCH">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="inputmerk" class="form-label">Merk</label>
                            <input type="merk" name="merk" class="form-control" Value="{{ $row->merk}}" required>
                        </div>

                        <div class="mb-3">
                            <label for="inputTipe" class="form-label">Tipe</label>
                            <input type="text" name="tipe" class="form-control" Value="{{ $row->tipe}}" required>
                        </div>

                        <div class="mb-3">
                            <label for="inputHarga" class="form-label">Harga</label>
                            <input type="text" name="harga" class="form-control" Value="{{ $row->harga  }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="inputStatus">Status</label>
                            <select name="status" class="form-select" required>
                                <option value="">Pilih Status</option>
                                <option value="Y">Available</option>
                                <option value="N">Not Available</option>
                            </select>
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
