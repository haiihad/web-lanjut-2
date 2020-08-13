@extends('layouts.app')

@section('tittle','Halaman Mahasiswa')
@section('bread1','Mahasiswa')
@section('bread2','Daftar')
@section('content')
    <h2>Master Data Mahasiswa </h2>
    <a href="/mhs/create" class="btn btn-success btn-tm">Tambah</a>
    @include('layouts.alert')
    <table class="table table-striped" id="mhs-table">
        <thead>
            <tr>
                <th>No</th>
                <th>NPM</th>
                <th>Nama Lengkap</th>
                <th>Prodi</th>
                <th>Alamat</th>
                <th>Pilihan</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
    <script>
    $(function() {
        $('#mhs-table').DataTable({
            processing: true,
            serverSide: true,
            ajax : "{{route('mhs.list')}}",
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                { data: 'npm', name: 'npm' },
                { data: 'nama_lengkap', name: 'nama_lengkap' },
                { data: 'mprodi.nama_prodi', name: 'nama_prodi' },
                { data: 'alamat', name: 'alamat' },
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ]          
        });
    });
    </script>
@endsection