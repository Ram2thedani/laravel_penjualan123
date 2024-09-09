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

                                <form action="/barang/update/{{ $barang->id }}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="" class="form-label">Nama Barang</label>
                                        <input type="text" class="form-control" name="nama_barang" id=""
                                            aria-describedby="helpId" value="{{ $barang->nama_barang }}" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Harga</label>
                                        <input type="text" class="form-control" name="harga" id=""
                                            aria-describedby="helpId" value="{{ $barang->harga }}" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Satuan</label>
                                        <input type="text" class="form-control" name="satuan" id=""
                                            aria-describedby="helpId" value="{{ $barang->satuan }}" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Stok</label>
                                        <input type="number" class="form-control" name="stok" id=""
                                            aria-describedby="helpId" value="{{ $barang->stok }}" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Foto</label>
                                        <input type="file" name="photo" class="form-control" id="">
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
