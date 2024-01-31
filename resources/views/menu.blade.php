@extends('template.index')

@section('title', 'Menu')

@section('content')
<div class="container my-4">
    <div class="row">
        <div class="col-12">
            <a href="/menu/add">
                <button type="button" class="btn btn-success">Tambah</button>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Kode</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Ket</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($data as $row)
                        <tr>
                            <th scope="row">{{ $row->kode_makanan }}</th>
                            <td>{{ $row->nama }}</td>
                            <td>{{ $row->kategori }}</td>
                            <td>{{ $row->harga }}</td>
                            <td>{{ $row->ket }}</td>
                            <td>
                                <button type="button" class="btn btn-primary">
                                    <a class="text-light" href="/menu/{{ $row->kode_makanan }}/edit">Edit</a>
                                </button>
                                <button type="button" class="btn btn-danger">
                                    <a class="text-light" href="/menu/{{ $row->kode_makanan }}/delete">Hapus</a>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection