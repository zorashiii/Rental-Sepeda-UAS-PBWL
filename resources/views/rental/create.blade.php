@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Add Data Rental</h2></div>

                <div class="card-body">
                    <form action="{{ route('rental_store') }}" method="POST" class="mt-3">
                        @csrf

                        <div class="mb-3">
                            <label for="id">Nama Cust:</label>
                            <select class="form-select" id="id" name="cust_id" required>
                                <option>Pilih Customer</option>
                                @foreach ($customer as $customer )
                                    <option value="{{$customer->id}}">{{$customer->nama}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="spd_id">Merk Sepeda:</label>
                            <select class="form-select" id="spd_id" name="spd_id" required>
                                <option value="">Pilih Sepeda</option>
                                @foreach ($bicycle as $bicycle)
                                    <option value="{{ $bicycle->id }}" data-harga="{{ $bicycle->harga }}">{{ $bicycle->merk }}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="mb-3">
                            <label for="inputharga" class="form-label">Harga</label>
                            <input type="text" name="harga" id="harga" readonly>
                        </div>

                        <div class="mb-3">
                            <label for="inputTglRental" class="form-label">Tgl Rental</label>
                            <input type="date" name="tgl_rent" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="inputTglKembali" class="form-label">Tgl Kembali</label>
                            <input type="date" name="tgl_kembali" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="inputHari" class="form-label">Hari</label>
                            <input type="text" name="hari" id="hari" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="inputTotal" class="form-label">Total Harga</label>
                            <input type="text" name="total_harga" id="total_harga">
                        </div>

                        <div class="mb-3">
                            <label for="id">User:</label>
                            <select class="form-select" id="id" name="user_id" required>
                                @foreach ($users as $user )
                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                @endforeach
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
@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var bicycleSelect = document.getElementById('spd_id');
            var hargaInput = document.getElementById('harga');
            var tglRentalInput = document.getElementById('tgl_rental');
            var tglKembaliInput = document.getElementById('tgl_kembali');
            var hariInput = document.getElementById('hari');
            var totalHargaInput = document.getElementById('total_harga');

            bicycleSelect.addEventListener('change', function () {
                var selectedOption = bicycleSelect.options[bicycleSelect.selectedIndex];
                var harga = parseFloat(selectedOption.getAttribute('data-harga'));

                hargaInput.value = isNaN(harga) ? '' : harga.toFixed(2);
            });

            hariInput.addEventListener('keyup', function () {
                totalHargaInput.value = hargaInput.value * hariInput.value
            })

            // ... Existing code ...

        });
    </script>
@endpush

