@extends('layouts.app')

@section('title','Halaman Mahasiswa')
@section('bread1','Mahasiswa')
@section('bread2','Daftar Mahasiswa')

@section('content')
    <h1>Master Mahasiswa</h1>
    <table class="table table-striped" id="mhs_table">
        <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama Lengkap</th>
                    <th>Program Studi</th>
                    <th>Alamat</th>
                </tr>
        </thead>
    </table>
    <script>
    $(function() {
        $('#mhs_table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('mhs_list') }}',
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                { data: 'nim', name: 'nim' },
                { data: 'nama_lengkap', name: 'nama_lengkap' },
                { data: 'prodi', name: 'prodi' },
                { data: 'alamat', name: 'alamat' },
            ]
        });
    });
    </script>
@endsection