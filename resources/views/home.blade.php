@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p class="lead">{{ __('Welcome back! You are logged in.') }}</p>
                        <p> {{__('Selamat datang di My Bike !
                            Dapatkan kenyamanan dan kebebasan menjelajahi dengan sepeda berkualitas dari kami.') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Add some styles for the interactive button and popup */
    .btn-info {
        margin-top: 20px;
    }

    .popup {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 20px;
        background: #fff;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .popup-content {
        text-align: center;
    }

    .close {
        position: absolute;
        top: 10px;
        right: 10px;
        font-size: 20px;
        cursor: pointer;
    }
</style>
    

@endsection
