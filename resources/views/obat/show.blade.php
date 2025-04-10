@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h3>Data Kategori</h3>
                </div>

                <div class="card-body">
                   <div class="mb-2">
                                <label class="mb-3" for=""><b>Nama Obat</b></label>
                                <input type="text" class="form-control" name="nama_obat"
                                 value="{{$obat->nama_obat}}" disabled>
                            </div>
                             <div class="mb-3">
                                <label for="">Jenis Obat</label>
                                <input type="text" class="form-control" name="jenis_obat"  
                                value="{{$obat->jenis_obat}}" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="">Tanggal Kadaluarsa</label>
                                <input type="date" class="form-control" name="tgl_kadaluarsa"
                                  value="{{$obat->tgl_kadaluarsa}}" disabled>
                            </div>
                            <div class="mb-3">                              
                                <label for="">Harga</label>
                                <input type="text" class="form-control" name="harga" 
                                 value="Rp.{{ number_format($obat->harga, 0, ',', '.') }}" disabled>
                            </div>
                    <a href="{{ route('obat.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
