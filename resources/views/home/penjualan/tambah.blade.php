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

                                <form action="/penjualan/simpan" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="" class="form-label">Nama</label>
                                        <input type="text" class="form-control" name="nama" id=""
                                            aria-describedby="helpId" placeholder="" />
                                    </div>


                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No. Bon</th>
                                                    <th scope="col">Nama Barang</th>
                                                    <th scope="col">Harga</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($detailpenjualan as $detailpenjualan)
                                                    <tr class="">
                                                        <td>{{ $detailpenjualan->nobon }}</td>
                                                        <td>{{ $detailpenjualan->barang->nama_barang }}</td>
                                                        <td>{{ $detailpenjualan->barang->harga }}</td>
                                                        <td>R1C3</td>
                                                    </tr>
                                                @endforeach


                                            </tbody>
                                        </table>
                                    </div>



                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
