@extends('template.index')

@section('title', 'Tambah Menu')

@section('content')
    
    <div class="container-fluid bg-success-subtle my-5">
        <div class="row">
            <div class="col-12">
                <form action="/menu/save" method="POST">
                    @csrf
                    @isset($data)
                        <input type="hidden" name="old_kode" value="{{ @$data->kode_makanan }}">
                    @endisset
                    <div class="mb-3">
                      <label for="kode" class="form-label">Kode</label>
                      <input type="text" class="form-control" id="kode" name="kode" value="{{ @$data->kode_makanan }}">
                    </div>

                    <div class="mb-3">
                      <label for="nama" class="form-label">Nama</label>
                      <input type="text" class="form-control" id="nama" name="nama" value="{{ @$data->nama }}">
                    </div>

                    <div class="mb-3">
                      <label for="kategori" class="form-label">Kategori</label>
                      <input type="text" class="form-control" id="kategori" name="kategori" value="{{ @$data->kategori }}">
                    </div>
                    
                    <div class="mb-3">
                      <label for="harga" class="form-label">Harga</label>
                      <input type="number" class="form-control" id="harga" name="harga" value="{{ @$data->harga }}">
                    </div>
                    
                    <div class="mb-3">
                      <label for="ket" class="form-label">Keterangan</label>
                      <input type="text" class="form-control" id="ket" name="ket" value="{{ @$data->ket }}">
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </form>
            </div>
        </div>
    </div>

@endsection