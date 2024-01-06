@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>Edit User</h2>
                </div>

                <div class="card-body">
                    <form action="{{ url('users/' . $row->id) }}" method="post">
                        <input type="hidden" name="_method" value="PATCH">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="name">Nama</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ $row->name }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" value="{{ $row->email }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="password">New Password (Biarkan Jika tidak diganti)</label>
                            <input type="password" name="password" id="password" class="form-control" value="{{ $row->email }}" required
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
