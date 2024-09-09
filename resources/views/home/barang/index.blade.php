@extends('layouts.master')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h1>Halaman Data Barang</h1>
                                <a href="/barang/tambah" class="btn btn-primary">Tambah Data</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Nama Barang</th>
                                                <th scope="col">Harga</th>
                                                <th scope="col">Satuan</th>
                                                <th scope="col">Stok</th>
                                                <th scope="col">Foto</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($barang as $barang)
                                                <tr class="">
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $barang->nama_barang }}</td>
                                                    <td>{{ $barang->harga }}</td>
                                                    <td>{{ $barang->satuan }}</td>
                                                    <td>{{ $barang->stok }}</td>
                                                    <td><img src="{{ asset('storage/' . $barang->photo) }}"
                                                            style="width: 100px" alt="">
                                                    </td>
                                                    <td>
                                                        <a href="/barang/edit/{{ $barang->id }}"
                                                            class="btn btn-warning">Edit</a>
                                                        <a href="/barang/hapus/{{ $barang->id }}"
                                                            class="btn btn-danger">Hapus</a>
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
