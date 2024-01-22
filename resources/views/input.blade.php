@extends('template')

@section('judul', 'Home')

@section('content')
    <form action="/save" method="post">
        @csrf
        <div>
            <label for="nama">Nama Makanan</label>
            <input type="text" name="nama">
        </div>
        <div>
            <label for="kategori">Kategori Makanan</label>
            <input type="text" name="kategori">
        </div>
        <div>
            <label for="harga">Harga Makanan</label>
            <input type="number" name="harga">
        </div>
        <div>
            <label for="ket">Keterangan</label>
            <input type="text" name="ket">
        </div>
        <button type="submit">Simpan</button>
    </form>
@endsection