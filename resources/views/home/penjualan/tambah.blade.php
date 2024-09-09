@extends('layouts.master')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h1>Tambah Data User</h1>

                            </div>
                            <div class="card-body">

                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-md-9 mb-3">
                                            <form action="" method="post">
                                                <input type="text" class="form-control" name="id_barang" id="id_barang"
                                                    placeholder="Kode Barang" />
                                        </div>

                                        <div class="col-1 mb-3">

                                            <input type="number" class="form-control" name="qty" min="1"
                                                id="qty" placeholder="" value="1" required />
                                        </div>
                                        <div class="col-md-1 mb-3">
                                            <button type="submit" class="btn btn-primary">Check</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">No. Bon</th>
                                            <th scope="col">Nama Barang</th>
                                            <th scope="col">Harga</th>
                                            <th scope="col">Qty</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($detailpenjualan as $detailpenjualan)
                                            <tr class="">
                                                <td>{{ $detailpenjualan->nobon }}</td>
                                                <td>{{ $detailpenjualan->barang->nama_barang }}</td>
                                                <td>{{ $detailpenjualan->barang->harga }}</td>
                                                <td> {{ $barangCounts[$detailpenjualan->id_barang] ?? 0 }}</td>
                                                <td> <a href="/detailpenjualan/hapus/{{ $detailpenjualan->id_barang }}"
                                                        class="btn btn-danger"><i class="fas fa-trash"></i></a>
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
