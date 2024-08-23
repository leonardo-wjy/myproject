@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1>Dashboard</h1>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <!-- Statistik Jumlah User -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="card-title">Jumlah User</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                {{ $userCount }}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="card-title">Jumlah Produk</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                {{ $productCount }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection