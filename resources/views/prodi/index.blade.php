@extends('layouts.app')
@section('title','Prodi Page')
@section('bread1','Program Studi')
@section('bread2','Data')
@section('content')
    <h2>Master Data Prodi </h2>
    <table class="table table-striped" id="mhs-table">
    <a href="/prodi/create" class="btn btn-success btn-tm">Tambah</a>
    @include('layouts.alert')
     <thead>
            <tr>
                <th>No</th>
                <th>Kode Prodi</th>
                <th>Nama Prodi</th>
                <th>Kaprodi</th>
                <th>Pilihan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($list_prodi as $key => $item)
             <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $item -> kode_prodi }}</td>
                <td>{{ $item -> nama_prodi }}</td>
                <td>{{ $item -> kaprodi }}</td>
                <td align="center" width="20%">
                    <a href="/prodi/edit/{{$item->kode_prodi}}" class="btn btn-info btn-sm" role="button">
                        <i class="fa fa-info-circle"></i>Edit
                    </a>
                    <a href="/prodi/delete/{{$item->kode_prodi}}" class="btn btn-warning btn-sm" role="button">
                        <i class="fa fa-pencil-square"></i>Hapus
                    </a>
             </tr>
            @endforeach
        </tbody>
    </table>
@endsection