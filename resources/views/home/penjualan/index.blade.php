@extends('layouts.master')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h1>Halaman Data Penjualan</h1>
                                <h4>{{ auth()->user()->id }}</h4>
                                <a href="/penjualan/tambah" class="btn btn-primary"
                                    onclick="return confirm('Konfirmasi tambah transaksi baru')">Transaksi
                                    Baru</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">No. Transaksi</th>
                                                <th scope="col">Kasir</th>
                                                <th scope="col">Total</th>
                                                <th scope="col">Tgl Transaksi</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($penjualan as $penjualan)
                                                <tr class="">
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $penjualan->user->nama }}</td>
                                                    <td>{{ $penjualan->total }}</td>
                                                    <td>{{ $penjualan->created_at }}</td>
                                                    <td>{{ $penjualan->status }}</td>
                                                    <td>
                                                        @if ($penjualan->status == 'Belum Selesai')
                                                            <a class="btn btn-primary"
                                                                href="/penjualan/transaksi/{{ $penjualan->id }}">Lengkapi
                                                                Transaksi</a>
                                                        @else
                                                        @endif
                                                    </td>

                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
