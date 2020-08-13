@extends('layouts.app')
@section('title','Prodi Page')
@section('bread1','Prodi')
@section('bread2','Data')
@section('content')
  <h3>Master Data Prodi</h3>
  <p><a href="/prodi/create" class="btn btn-success btn-sm">Tambah</a></p>
    @include('layouts.alert')
  <table class="table table-striped" id="mhs-table">
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
      @forelse ($prodi as $item)
      <tr>
        <td>{{ $loop->index +1 }}</td>
        <td>{{ $item->kode_prodi }}</td>
        <td>{{ $item->nama_prodi }}</td>
        <td>{{ $item->kaprodi }}</td>
        <td class="d-flex">
          <a href="{{ route('prodi.edit', $item->kode_prodi)}}" class="btn btn-success px-2 py-1 mr-2">Edit</a>
          <form action="{{ route('prodi.destroy', $item->kode_prodi)}}" method="post">
            @csrf
            @method("delete")
            <button type="submit" class="btn btn-danger px-2 py-1">Hapus</button>
          </form>
        </td>
      </tr>
      @empty
          <tr>
            <td colspan="6" class="text-center">Data masih kosong</td>
          </tr>
      @endforelse
    </tbody>
  </table>
@endsection