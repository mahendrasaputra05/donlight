@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container mt-4">

    {{-- Header --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">Dashboard</h2>
        <a href="{{ route('logout') }}" class="btn btn-danger btn-sm">Logout</a>
    </div>

    {{-- Card Section --}}
    <div class="row">

        <div class="col-md-4 mb-3">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title">Total User</h5>
                    <p class="card-text fs-3 fw-bold">{{ $totalUser }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title">Total Transaksi</h5>
                    <p class="card-text fs-3 fw-bold">{{ $totalTransaksi }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title">Pendapatan Hari Ini</h5>
                    <p class="card-text fs-3 fw-bold">Rp {{ number_format($pendapatanHariIni) }}</p>
                </div>
            </div>
        </div>

    </div>

    {{-- Tabel Transaksi --}}
    <div class="card shadow-sm border-0 mt-4">
        <div class="card-body">
            <h5 class="mb-3">Riwayat Transaksi Terbaru</h5>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Pasien</th>
                        <th>Total Bayar</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transaksi as $t)
                    <tr>
                        <td>{{ $t->id }}</td>
                        <td>{{ $t->nama_pasien }}</td>
                        <td>Rp {{ number_format($t->total_bayar) }}</td>
                        <td>{{ $t->created_at->format('d-m-Y H:i') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>

</div>
@endsection
