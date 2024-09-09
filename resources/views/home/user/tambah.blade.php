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

                                <form action="/user/simpan" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="" class="form-label">Nama</label>
                                        <input type="text" class="form-control" name="nama" id=""
                                            aria-describedby="helpId" placeholder="" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Username</label>
                                        <input type="text" class="form-control" name="username" id=""
                                            aria-describedby="helpId" placeholder="" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Password</label>
                                        <input type="password" class="form-control" name="password" id=""
                                            aria-describedby="helpId" placeholder="" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">No telp.</label>
                                        <input type="number" class="form-control" name="notelp" id=""
                                            aria-describedby="helpId" placeholder="" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Level</label>
                                        <select name="level" id="" class="form-control">
                                            <option value="Kasir">Kasir</option>
                                            <option value="Manager">Manager</option>
                                        </select>
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
