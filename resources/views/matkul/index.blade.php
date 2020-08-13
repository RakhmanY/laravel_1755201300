@extends('layouts.app')
@section('title','Mata Kuliah Page')
@section('bread1','Mata Kuliah')
@section('bread2','Data')
@section('content')
  <h3>Master Data Mata Kuliah</h3>
  <p>
    <a href="/matkul/create" class="btn btn-success btn-sm">Tambah</a>
  </p>
@include('layouts.alert')
  <table class="table table-striped" id="mhs-table">
    <thead>
      <tr>
        <th>No</th>
        <th>Kode Matkul</th>
        <th>Nama Matkul</th>
        <th>SKS</th>
        <th>Semester</th>
        <th>Pilihan</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($matkul as $item)
          <tr>
            <td>{{ $loop->index + 1 }}</td>
            <td>{{ $item->kode_matkul }}</td>
            <td>{{ $item->nama_matkul }}</td>
            <td>{{ $item->sks }}</td>
            <td>{{ $item->semester }}</td>
            <td class="d-flex">
              <a href="{{ route('matkul.edit', $item->kode_matkul)}}" class="btn btn-success px-2 py-1 mr-2">Edit</a>
              <form action="{{ route('matkul.destroy', $item->kode_matkul)}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger px-2 py-1">Delete</button>
              </form>
            </td>
          </tr>
      @empty

      @endforelse
    </tbody>
  </table>
@endsection