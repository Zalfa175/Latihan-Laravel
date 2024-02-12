@extends('template.index')

@section('title', 'Tambah Kategori')

@section('content')
    
    <div class="container mb-5">
        <div class="row">
            <div class="col-12">
                <form action="/kategori/save" method="POST">
                    @csrf
                    @isset($data)
                        <input type="hidden" name="old_kode" value="{{ @$data->kode_kategoris }}">
                    @endisset
                    <div class="my-3">
                      <label for="kode" class="form-label">Kode</label>
                      <input type="text" class="form-control" id="kode" name="kode" value="{{ @$data->kode_kategoris }}">
                    </div>

                    <div class="mb-3">
                      <label for="nama" class="form-label">Nama</label>
                      <input type="text" class="form-control" id="nama" name="nama" value="{{ @$data->nama }}">
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