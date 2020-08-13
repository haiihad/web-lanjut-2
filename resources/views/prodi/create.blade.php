@extends('layouts.app')
@section('title','Prodi Page')
@section('bread1','Prodi')
@section('bread2','Data')
@section('content')
    <h3>Form Prodi</h3><hr>

    @include('layouts.alert')

    <form action="/prodi/store" method="POST">
    @csrf

    <div class="form-group row">
        <label for="kode_prodi" class="col-sm-12">Kode_Prodi</label>
        <div class="col-sm-3">
            <input type="text" name="kode_prodi" class="form-control" id="kode_prodi" placeholder="Kode Prodi">
            @error('nim')<small id="kode_prodi" class="form-text text-danger">{{ $message }}</small>@enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="kode_prodi" class="col-sm-12">Nama Prodi</label>
        <div class="col-sm-5">
            <input type="text" name="nama_prodi" class="form-control" id="nama_prodi" placeholder="Masukan nama Prodi">
            @error('nama_prodi')<small id="nama_prodi" class="form-text textdanger">{{ $message }}</small>@enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="kode_prodi" class="col-sm-12">Kaprodi</label>
        <div class="col-sm-5">
        <input type="text" name="kaprodi" class="form-control" id="kaprodi" placeholder="Masukan nama Kaprodi">
            @error('kaprodi')<small id="kaprodi" class="form-text textdanger">{{ $message }}</small>@enderror

    </div>
    </div>
    <button class="btn btn-primary" type="submit">Simpan</button>
    <a href="{{ url()->previous() }}" class="btn btn-danger">Batal</a>
    </form>
@endsection